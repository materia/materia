<?php

namespace Materia\Widget;

class UniverseBar extends BaseWidget
{
    protected $title;
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    
    protected $searchBar;
    
    public function getSearchBar()
    {
        return $this->searchBar;
    }
    
    public function setSearchBar($searchBar)
    {
        $this->searchBar = $searchBar;
        return $this;
    }
    
    protected $user;
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}
