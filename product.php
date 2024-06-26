<?

class Product
{
    public string $category;    //cani gatti

    public string $img_src;
    public string $title;
    public int $price;
}
class Cibo extends Product
{
    public string $allergies;
}
class Gioco extends Product
{
    public string $age;
}
class Cuccia extends Product
{
    public string $size;
}
