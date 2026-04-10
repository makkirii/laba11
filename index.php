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
$link1 = '<a href="?page=page">Главная</a>';
$link2 = '<a href="?page=blog">Музыка</a>';
$link3 = '<a href="?page=third">Космос</a>';
echo '<nav>';
echo $link1 . ' | ' . $link2 . ' | ' . $link3;
echo '</nav>';
$now = $_GET['page'] ?? 'page';
if ($now == 'blog')
{
    $page = new BlogPage();
    $page->render();
}
elseif ($now == 'third')
{
    $page = new ThirdPage();
    $page->render();
}
else
{
    $page = new Page();
    $page->render();
}
?>
<style>
  body {
    font-family: sans-serif;
    background: linear-gradient(135deg, #e8ecf1 0%, #c9d6df 100%);
    padding: 20px;
    line-height: 1.5;
    min-height: 100vh;
    margin: 0;
  }
  nav {
    margin-bottom: 20px;
    padding: 10px;
    background: #fff;
    border-radius: 6px;
    display: inline-block;
  }
  nav a {
    color: #0066cc;
    text-decoration: none;
    margin: 0 10px;
  }
  nav a:hover { text-decoration: underline; }
  .card {
    display: inline-block;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    margin: 8px;
    width: 200px;
    text-align: center;
    vertical-align: top;
    min-height: 100px;
  }
  .card h2 { font-size: 16px; margin-bottom: 8px; }
  .card p { font-size: 13px; color: #555; margin: 0; }
</style>