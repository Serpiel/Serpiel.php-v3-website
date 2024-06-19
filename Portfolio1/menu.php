<?php
trait Render {
    function renderHeader() {
        ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="Core/Pages/games.php">Games</a></li>
                <li><a href="Core/Pages/lore.php">Lore</a></li>
                <li><a href="Core/Pages/about.php">About</a></li>
        <?php
    }
}
interface RenderMenu
{
    public function renderHeader();
}

class GenerateContent implements RenderMenu
{
    
    use Render;
}
class Welcome {
public $welcome;

function set_welcome($welcome) {
$this->welcome = $welcome;
return $this->welcome;
}
}
$welcomeObj = new Welcome();
$welcome = $welcomeObj->set_welcome("Bienvenue dans l'univers de Assassin's Creed");

$menu = new GenerateContent();
?>