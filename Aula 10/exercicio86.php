<?php

abstract class File {

    private $size;

    public function zip(){

    }

    public function __construct()
    {
        
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
}

class Image extends File{

    private int $width, $height;
    
    
    
    public function zip(){
        echo "metodo de comprensão da imagem em JPG.";
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

}

class Audio extends File {
    private $codec, $duration;

    public function zip (){
        echo "metodo de zip AUDIO com CODEC";
    }

}

class Text extends File{
    private $fontsize;

    public function __construct()
    {
        
    }
    public function zip(){
        echo "método de zip de TEXTO";
    }

    /**
     * Get the value of fontsize
     */ 
    public function getFontsize()
    {
        return $this->fontsize;
    }

    /**
     * Set the value of fontsize
     *
     * @return  self
     */ 
    public function setFontsize($fontsize)
    {
        $this->fontsize = $fontsize;

        return $this;
    }
}


$texto = new Text;
$texto->setFontsize = "12";
$texto->zip();