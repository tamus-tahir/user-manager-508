<?php

function getNavigasi()
{
    $db = \Config\Database::connect();
    return $db->table('tabel_navigasi')->orderBy('urutan', 'ASC')->get()->getResultArray();
}

function checkAccess($id_profil, $id_navigasi)
{
    $db = \Config\Database::connect();
    $akses = $db->table('tabel_akses')->getWhere(['id_profil' => $id_profil, 'id_navigasi' => $id_navigasi])->getResult();

    if (count($akses) > 0) {
        return "checked";
    }
}

function upload($file, $oldName, $temp)
{
    if ($file->getError() == 4) {
        $newName = $oldName;
    } else {
        $newName = $file->getRandomName();
        $file->move($temp, $newName);

        if ($oldName) {
            unlink($temp . '/' . $oldName);
        }
    }

    return $newName;
}
