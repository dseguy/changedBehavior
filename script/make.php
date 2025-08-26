<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

// create sitemap
$sitemap = new Sitemap('./sitemap.xml');

if (!file_exists('behavior')) {
	mkdir('behavior', 0755);
} else {
	shell_exec('rm -rf behavior/*');
}

fopen("build.log", "w+");

$behaviors = array();

$behaviors[] = "PHP changed behaviors";
$behaviors[] = "----------------------";
$behaviors[] = "";

$files = glob('docs/*.ini');
$files = array_diff($files, ['docs/skeleton.ini']);
$stats = array('author' => 0,
				);
$errors = 0;
$tips = array();
foreach($files as $file) {
	$tip = parse_ini_file($file);

	if ($tip === false) {
		die("Warning : $file is not valid INI");
	}

	$tip = (object) $tip;
	if (!isset($tip->title) || (strlen($tip->title) < 3)) {
		die("No title for $file");
	} else {
		if (!str_contains($tip->title, ' ')) {
			buildlog("suspiciously no white space in title for $file");
		}
	}

	if (!isset($tip->description) || (strlen($tip->description) < 3)) {
		die("No description for $file");
	} else {
		if (!str_contains($tip->description, ' ')) {
			buildlog("suspiciously no white space in description for $file");
		}
	}

	if (!isset($tip->features)) {
		buildlog("features is missing in $file");
	} else {
	    $tip->features = array_filter($tip->features);
	    
	    if (empty($tip->features)) {
    		buildlog("features is empty in $file");
	    }
	}

	if (!isset($tip->keywords)) {
//		buildlog("keywords is missing in $file");
	} else {
	    $tip->keywords = array_filter($tip->keywords);
	    
	    if (!empty($tip->keywords)) {
	        if (count($tip->keywords) !== count(array_unique($tip->keywords))) {
    		    buildlog("keywords has duplicates in $file");
    		}
	    }
	}

	if (!isset($tip->alternatives)) {
		buildlog("alternatives is missing in $file");
	} else {
	    $tip->alternatives = array_filter($tip->alternatives);
	    
	    if (empty($tip->alternatives)) {
    		buildlog("alternatives is empty in $file");
	    } else {
	        if (count($tip->alternatives) !== count(array_unique($tip->alternatives))) {
    		    buildlog("alternatives has duplicates in $file");
    		}
	    }
	}

	if (str_contains($tip->before, "/codes/")) {
		buildlog("before contains /codes/ in $file");
	}

	if (str_contains($tip->after, "/codes/")) {
		buildlog("after contains /codes/ in $file");
	}

	if (!isset($tip->analyzer)) {
		buildlog("analyzer is missing in $file");
	} elseif (!is_array($tip->analyzer)) {
		buildlog("analyzer is not an array in $file");
    } else {	    
	    $tip->analyzer = array_filter($tip->analyzer);
	    if (empty($tip->analyzer)) {
    		buildlog("analyzer is empty in $file");
	    } else {
	        foreach($tip->analyzer as $rule) {
	            if (!file_exists('../analyzeG3/library/Exakat/Analyzer/'.$rule.'.php')) {
            		buildlog("No such analyzer as '$rule' in $file");
	            }
	        }
	    }
	}

	if (!isset($tip->code)) {
		buildlog("code is missing in $file");
	} elseif (!is_string($tip->code)) {
		buildlog("code is not an array in $file");
	} elseif (substr($tip->code, 0, 5) !== '<?php') {
		buildlog("code is not starting with <?php in $file");
	} elseif (substr($tip->code, -2) !== '?>') {
		buildlog("code is not finishing with ?> in $file");
    }

	if (!isset($tip->phpError)) {
		buildlog("phpError is missing in $file");
	} else {
		if (!is_array($tip->phpError)) {
			buildlog("phpError is not an array in $file");
			$tip->phpError = array($tip->phpError => $tip->phpError);
		}
//		$tip->phpError = array_filter($tip->phpError);
		
		if (!empty($tip->phpError)) {
			foreach($tip->phpError as $title => $id) {
			    if (empty($id) && $title === 0) {
					continue;
			    }

			    if (empty($id)) {
					buildlog("phpError has an empty link in $file");
			    }
			    
				if (is_int($title)) {
					$title = $id; 
					$id = php_error_id($id);
					buildlog("phpError has not title in $file");
				}
		
				if (!file_exists('../php-errors/errors/'.$id.'.ini')) {
					buildlog("phpError doesn't exists in $file");
					print '../php-errors/errors/'.$id.'.ini in '.$file.PHP_EOL;
				}
			}
	
		} 
	}

	if (isset($tip->seeAlso)) {
		$tip->seeAlso = array_filter($tip->seeAlso);
	} else {
		buildlog("Missing seeAlso in $file");
		
		if (!is_array($seeAlso)) {
			buildlog("seeAlso is not an array in $file");
		}
	}
	$tips[$file] = $tip;
	
	if (!isset($tip->before)) {
		die($file);
	}
}

uksort($tips, function(string $a, string $b) : int { return strtolower($a) <=> strtolower($b); });

$php = array('5.6' => [],
			 '7.0' => [],
			 '7.1' => [],
			 '7.2' => [],
			 '7.3' => [],
			 '7.4' => [],
			 '8.0' => [],
			 '8.1' => [],
			 '8.2' => [],
			 '8.3' => [],
			 '8.4' => [],
			 '8.5' => [],
			 '9.0' => [],
			);
$stats = array('php' => 0);

$behaviorlist = [];
$errormessagelist = [];
foreach($tips as $file => $changedBehavior) {
	$behavior = [];
	if ($e = check($changedBehavior, $file)) {
		buildlog("Error in file $file : $e");
		++$errors;
		continue;
	}
	
	$anchor = make_anchor($changedBehavior->title);
	$behavior[] = '.. _'.$anchor.':'.PHP_EOL;
	$behavior[] = $changedBehavior->title;
	$behavior[] = str_repeat('=', strlen($changedBehavior->title));
	
	$behavior[] = '.. meta::';
	$behavior[] = '	:description:';
	$first = preg_split('/[\.\?;'.PHP_EOL.']/', $changedBehavior->description)[0];
	$behavior[] = '		'.$changedBehavior->title.': '.$first.'.';
	
	$behavior[] = '	:twitter:card: summary_large_image';
	$behavior[] = '	:twitter:site: @exakat';
	$behavior[] = '	:twitter:title: '.$changedBehavior->title.'';
	$behavior[] = '	:twitter:description: '.$changedBehavior->title.': '.$first.'';
	$behavior[] = '	:twitter:creator: @exakat';
	$behavior[] = '	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png';

	$behavior[] = '	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png';
	$behavior[] = '	:og:title: '.$changedBehavior->title.'';
	$behavior[] = '	:og:type: article';
	$behavior[] = '	:og:description: '.$first.'';
	$behavior[] = '	:og:url: https://php-tips.readthedocs.io/en/latest/tips/'.$changedBehavior->id.'.html';
	$behavior[] = '	:og:locale: en';

	$behavior[] = '';	
	$behavior[] = str_replace("\n", "\n\n", $changedBehavior->description);
	$behavior[] = '';
	
	/*
	$behavior[] = <<<SCRIPT
.. raw:: html
    <script type="application/ld+json">
    {
             "@type":"WebSite",
             "@id":"https://www.exakat.io/en/#website",
             "url":"https://www.exakat.io/en/",
             "name":"Exakat",
             "description":"Bring Quality to your PHP Projects",
             "publisher":{
                "@id":"https://www.exakat.io/en/#organization"
             },
             "inLanguage":"en-US"
          }
    </script>
SCRIPT;
	*/
	$code = $changedBehavior->code;
	$code = '   '.str_replace("\n", "\n   ", $code);
	$before = $changedBehavior->before;
	$before = '   '.str_replace("\n", "\n   ", $before);
	$after = $changedBehavior->after;
	$after = '   '.str_replace("\n", "\n   ", $after);

	$behavior[] = <<<CODE
PHP code
________
.. code-block:: php

$code

Before
______
.. code-block:: output

$before

After
______
.. code-block:: output

$after

CODE;
	$behavior[] = '';
	$behavior[] = 'PHP version change';
	$behavior[] = '__________________';
	if (!empty($changedBehavior->deprecation)) {
		$behavior[] = "This behavior was deprecated in ".$changedBehavior->deprecation;
		$behavior[] = '';
	}
	$behavior[] = "This behavior changed in ".$changedBehavior->phpVersion;
	$behavior[] = '';
	
	$php[$changedBehavior->phpVersion][$changedBehavior->title] = '    * :ref:'.$anchor.'';

	if (!empty($changedBehavior->seeAlso)) {
		$seeAlso = array();
		foreach($changedBehavior->seeAlso as $title => $link) {
			if (is_int($title)) {
				buildlog("Wrong title for $link in $file");
			}

			if ($link[0] === '<') {
				buildlog("Check the link on $file: $link");
			}

			if ($link[-1] === '_') {
				buildlog("Check the link on $file: $link");
			}


			$seeAlso[] = '* `'.$title.' <'.$link.'>`_';
		}
		$behavior[] = '';
		$behavior[] = 'See Also';
		$behavior[] = '________';
		$behavior[] = '';
		$behavior[] = implode(PHP_EOL, $seeAlso);
		
		$behavior[] = '';
	}

	if (!empty($changedBehavior->phpError)) {
		$behavior[] = '';
		$behavior[] = 'Error Messages';
		$behavior[] = '______________';
		$behavior[] = '';
		foreach($changedBehavior->phpError as $title => $id) {
			$errormessagelist[$title] = $anchor;
		
			$behavior[] = '  + `'.$title.' <https://php-errors.readthedocs.io/en/latest/messages/'.urlencode($id).'.html>`_';
		}
		$behavior[] = '';
		$behavior[] = '';
	}

//	$behavior[] = "\n----\n";
	$behavior[] = PHP_EOL;
	
	$name = $changedBehavior->id;
	file_put_contents('behavior/'.$name.'.rst', implode(PHP_EOL, $behavior));
	
	$behaviorlist[] = '   behavior/'.$name.'.rst';
	
	$sitemap->addItem('https://php-changed-behaviors.readthedocs.io/en/latest/behavior/'.$changedBehavior->id.'.html');
}

print ("Total: ".count(glob("codes/*.php"))." PHP codes\n");

if (!empty($errormessagelist)) {
	$error = array('PHP Error Messages',
				   '--------------------',
					);
					
	foreach($errormessagelist as $message => $link) {
		$error[] = '    * :ref:`'.$message.' <'.trim($link, '`').'>`';
	}
	$error[] = '';
	
	file_put_contents('errormessages.rst', implode(PHP_EOL, $error));
}


$changed = file_get_contents('changed.rst.in');
$changed = str_replace('behaviorlist', implode(PHP_EOL, $behaviorlist), $changed);
file_put_contents('changed.rst', $changed);
print ("processed ".count($files)." file with $errors error\n");

$sitemap->write();


if (!empty($php)) {
	$versionRst = <<<RST
Per PHP version
---------------


RST;
	
	krsort($php);
	$php = array_filter($php);
	foreach($php as $version => $list) {
		ksort($list);
		$versionRst .= "* $version\n";
		$versionRst .= implode(PHP_EOL, $list).PHP_EOL;
		++$stats['php'];
	}
	file_put_contents('phpversionindex.rst', $versionRst);
	print ("processed ".$stats['php']." PHP versions\n");
}

if (!empty($authors)) {
	$authorRst = <<<RST
Author index
------------


RST;
	
	ksort($authors);
	foreach($authors as $name => $list) {
		$authorRst .= "* $name\n";
		$authorRst .= implode(PHP_EOL, $list).PHP_EOL;
		++$stats['author'];
	}
	file_put_contents('authorindex.rst', $authorRst);
	print ("processed ".$stats['author']." authors\n");
}

//shell_exec('make html');
print (shell_exec('wc -l build.log') ?? 0)." lines in buildlog.txt\n";

function check(stdClass $tip, string $file) : string {
	if (empty($tip->title)) {
		buildlog("Empty title in $file");
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = '`'.strtr(mb_strtolower($title), ' ', '-').'`';
	return $title;
}

function buildlog($message) {
	static $log;
	
	if (empty($log)) {
		$log = fopen("build.log", "w+");
	}
	
	fwrite($log, $message.PHP_EOL);
}

function php_error_id(string $url) {
	return str_replace(' ', '-', mb_strtolower($url));
}
?>