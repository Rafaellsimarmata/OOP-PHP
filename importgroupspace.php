<?php 

    require_once "namespace.php";

//    use Fungsi;

    use Helper\{HelperTool as Help, Searcher as Search, Finder as Find };

    use function Fungsi\{Generate as Hello, Calculate as Calculate };
    use const Fungsi\{Author};


    $eko = new Help();
    $search = new Search();

    Calculate();
    Hello();



?>