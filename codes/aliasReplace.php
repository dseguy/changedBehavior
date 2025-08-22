<?php

namespace A {

        class xBefore {}
}

namespace A {
    use y as xAfter;
    use y as xBefore;
    class y {}

  print get_class(new y);    
}


namespace A {
        class xAfter {}
}

?>