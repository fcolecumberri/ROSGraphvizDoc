<?php
trait InfoChannel{
    public $have_subs = false;
    public $have_pubs = false;

    public function is_leaf(){
        return !($this->have_subs and $this->have_pubs);
    }

    public function connection_label(){
        if(@($this->renamed_from)) return "Renamed from:\\n$this->renamed_from";
        return '';
    }
}
