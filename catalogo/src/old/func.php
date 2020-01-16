<?php 

/* function name($param1, $param2): return type
    function teste($a, $b): int
    function teste($a, $b): void
*/
function createDisc($album, $artista, $img): array{
    return[
        $album =>[
            'artista'=>$artista,
            'img' => $img
        ]
    ];
}

?>