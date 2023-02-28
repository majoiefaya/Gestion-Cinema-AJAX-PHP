<?php
    include("ConnexionBaseDeDonnées.php");
    include_once('Film.Class.php');

    

    class FilmAdmin
    {
        public function AjouterFilm(Film $film)
        {
            global $db;

            $AjouterFilm=$db->prepare("INSERT INTO Film(id_personne,Libelle,Contenu)
        VALUES(:id,:libelle,:contenu)");

            $AjouterFilm->execute(
            array(
                'id'=>$film->getIdPersonne(),
                'libelle'=>$film->getLibelle(),
                'contenu'=>$film->getContenu(),
            )
        );


            $error=$AjouterFilm->errorInfo();

            if (is_null($error[1])) {
                return true;
            }
            return false;
        }


   
        public function ModifierFilm(Film $film, $idFilm,$idPersonne)
        {
            global $db;

            $ModifierFilm=$db->prepare("UPDATE Film SET id_personne=:idP,Libelle=:libelle,Contenu=:contenu
         WHERE id_Film=:idF");
            $ModifierFilm->execute(
            array(
                'idF'=>$idFilm,
                'idP'=>$idPersonne,
                'libelle'=>$film->getLibelle(),
                'contenu'=>$film->getContenu(),
            )
        );

            $error=$ModifierFilm->errorInfo();

            if (is_null($error[1])) {
                return true;
            }
            return false;
        }





        public function SupprimerFilm($id)
        {
            global $db;

        
            $SupprimerFilm=$db->prepare('DELETE FROM Film WHERE id=:id_Film');
        
            $SupprimerFilm->execute(
                array(
                'id_Film'=>$id
            )
            );

            $error=$SupprimerFilm->errorInfo();

            if (is_null($error[1])) {
                return true;
            }
            return false;
        }

    
        public function InfosFilm($id)
        {
            global $id;
            global $db;

            $GetInfosFilm=$db->prepare("SELECT * FROM Film WHERE id_Film=:id");

            $GetInfosFilm->execute(
                array(
            'id'=>$id
        )
            );
    
            $infos=$GetInfosFilm->fetch();
        }
    }

?>