<?php
class Page
{
    private string $name = 'page';
    private string $template = '<div><p>It is a default page</p></div>';
    public function render()
    {
        echo $this->template;
    }
}
class BlogPage extends Page
{
    private string $name = 'blog';
    private string $template = 
    '
    <div class="card"><h2>🎸 Рок</h2><p>Драйв и гитары</p></div>
    <div class="card"><h2>🎹 Поп</h2><p>Лёгкость и хиты</p></div>
    <div class="card"><h2>🎷 Джаз</h2><p>Свобода и импровизация</p></div>';
    public function render()
    {
        echo $this->template;
    }
}
class ThirdPage extends Page
{
    private string $name = 'third';
    private string $template = 
    '<div class="card"><h2>🪐 Планеты</h2><p>8 планет вращаются вокруг Солнца</p></div>
     <div class="card"><h2>⭐ Звёзды</h2><p>Миллиарды звёзд в нашей галактике</p></div>
     <div class="card"><h2>🚀 Ракеты</h2><p>Путь человечества к звёздам</p></div>';   
     public function render()
     {
         echo $this->template;
     }
}
?>