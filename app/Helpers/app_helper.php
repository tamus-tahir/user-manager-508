<?php

function getNavigasi()
{
    $db = \Config\Database::connect();
    return $db->table('tabel_navigasi')->orderBy('urutan', 'ASC')->get()->getResultArray();
}
