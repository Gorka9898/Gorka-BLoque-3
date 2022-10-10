<pre>
<?php



class Corredor{

    private $nom;
    private $codigo;
    private $segs=[];


    public function __constructor($nom, $codigo, $segs){

        $this->nom=$nom;
        $this->codigo=$codigo;
        $this->segs=$segs;
 
       

    }

    public function anadirCarrera($nuevosSegundos){

        try {

            $min=1000;

            for ($z=0; $z < count($this->segs); $z++) { 
                if ($min>=$this->segs[$z]) {
                    $min=$this->segs[$z];
                }
            }

            

            if (count($this->segs)>5 || $min<5) {
                throw new Exception("Error Processing Request", 1);
                
            }else{
            array_push($this->segs,$nuevosSegundos);

            echo "Carreras actuales: ";
            echo "<br><br>";

        for ($i=0; $i < count($this->segs); $i++) { 
            echo $this->segs[$i]." "."<br>";
        }
        echo "<br>";
}




        } catch (Exception $e) {
            
            if (count($this->segs)>5 && $min<5) {
                echo "No se pueden añadir mas de 5 carreras ni añadir carreras de menos de 5 segundos";
                echo "<br><br>";
            }elseif (count($this->segs)>5) {
                echo "No se pueden añadir mas de 5 carreras";
                echo "<br><br>";
            }elseif ($min<5) {
                echo "No puede haber una carrera de menos de 5 segundos";
                echo "<br><br>";
            }

        }
       

        
    }

    public function vaciarCarreras(){
        $this->segs[0];
    
    }
    


    public function getNom(){
        echo "Prueba getters";
        echo "<br>";
        echo $this->nom;
        echo "<br> Prueba setters";
        echo "<br>";
        echo "-------<br>";
        echo $this->nom;
        return $this->nom;

    }
    public function setNom($nuevoNombre){

        $this->nom= $nuevoNombre;
    }


    public function getCodigo(){

        return $this->codigo;

    }
    public function setCodigo($nuevoCodigo){

        $this->codigo= $nuevoCodigo;

    }


    public function getSegs(){

        return $this->Segs;

    }
    public function setSegs($nuevoSegs){

        $this->segs= $nuevoSegs;

    }






}

    














?>


</pre>
