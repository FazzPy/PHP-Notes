<html>
 <head>
<title>Fazz Tech</title>
 </head>
 <body>
  <p>
    <?php
     $sayi = 10;
     $yazi = "Bilişim Teknolojileri";
     $karakter = 'X';
     echo $sayi;
     echo '<br/>';
     echo $yazi;
     echo '<br/>';
     echo $karakter;
     echo '<br/>';
    ?>
  
    <?php
    //PHP’de iki değişkeni birleştirmek için “.” kullanılır. Aşağıdaki kodlamalarda iki değişkenin birleştirilmesi gerçekleştirilmiştir.
     $x = 'Bilişim';
     $y = 'Teknolojileri';
     echo $x.$y;
    ?>
  
    <?php
     //Değişkenlerle toplama, çıkarma, çarpma ve bölme işlemi yapılabilmesi için değişken değerlerinin sayı olması gerekir.
     $sayi1 = 10;
     $sayi2 = 5;
     echo $sayi1+$sayi2;
     echo '<br/>';
     echo $sayi1-$sayi2;
     echo '<br/>';
     echo $sayi1*$sayi2;
     echo '<br/>';
     echo $sayi1/$sayi2;
    ?>

    <?php
        //Bir string değişken birden çok karakter dizinden oluşur. Değişken değerleri çift veya tek tırnak içine yazılır.
        $x = "Merhaba Dünya";
        $y = "Merhaba Dünya";
        echo $x;
        echo "<br>";
        echo $y;
    ?>

    <?php
        //Bir integer değişken ondalık olmayan sayılardan oluşur. Bir integer değişken içinde en az bir basamaklı sayı bulunmalıdır.
        $x = 10;
        $y = 20;
        echo $x;
        echo "<br>";
        echo $y;
    ?>

    <?php
        //Bir float değişken “.” işareti ile belirlenmiş ondalık sayılardan oluşur.
        $x = 10.5;
        echo $x;
    ?>

    <?php
    //Bir boolean değişken True veya False olmak üzere iki değer alır
    $x = true;
    $y = false;
    ?>

    <?php
    //Bir array değişken birden çok değeri tek bir değişkende saklar
    $dersler = array("Türkçe", "Matematik", "Tarih", "Coğrafya");
    ?>

    <?php
    //PHP, nesne yönelimli bir dildir. Sınıflardan türetilen nesneler kullanılarak uygulamalar geliştirilir.
    class ogrenci
    {
        public $adi;
        public $bolum;
        public $yas;
        function yazdir()
        {
            echo $this->adi . " " . $this->bolum . " " . $this->yas;
        }
    }
    $nesne_ogrenci = new ogrenci;
    $nesne_ogrenci->adi = "Ahmet";
    $nesne_ogrenci->bolum = "Bilişim";
    $nesne_ogrenci->yas = 16;
    $nesne_ogrenci->yazdir();
    ?>

    <?php
    //Bir NULL değişken yalnızca bir değere sahip olan özel bir değişkendir.
    $x = "Bilişim";
    $x = null;
    echo $x
    ?>

    <br><br>

    <?php
    //Sabitler, PHP ile yapılan web uygulamalarında değişken olmayan, uygulama boyunca hiç değiştirilmeden sabit kalacak değerleri tanımlamak için kullanılır. Sabitler sadece bir kez tanımlanıp
    //bir daha değiştirilemediği için güvenlidir. Sabitler içinde string, integer, float ve boolean türünde
    //veriler saklanır. Sabitlerin tanımlanması define() fonksiyonu ve const anahtar kelimesi ile gerçekleştirilir. Sabit isimlendirmesinde değişken isimlendirme kuralı uygulanır ve ismin başında $ işareti
    //kullanılmaz. Geleneksek olarak sabit isimleri büyük harflerle yazılır.

    //Define() fonksiyonunun kullanımı şu şekildedir:
    //define(Sabit adı, Sabit değeri, Büyük / küçük harf duyarlı)
    //Üçüncü parametre isteğe bağlıdır. Sabit adının büyük / küçük harfe karşı duyarlı olup olmadığını belirler.
    //Define() fonksiyonu ile sabit oluştururken aşağıdaki kodlamalarda olduğu gibi biri sabit adı, diğeri ise sabit değeri olmak üzere iki parametre kullanılır.

    define("KURUM", "FAZZ TECH");
    echo KURUM;
    echo "<br>";
    define("PI",3.14);
    echo 2*PI*10;
    echo "<br>";
    define ("Sayi", "5");
    echo Sayi*Sayi;
    echo "<br>";
    define("meyveler", array("elma", "muz", "portakal"));
    echo meyveler[1]

    ?>

    <?php

    // PHP ile sabit tanımlamanın bir diğer yolu const ifadesidir. Bu tanımlamanın kullanımı aşağıda verilmiştir

    const SABİT_ADI = 10;
    const KURUM2 = "FazzTech";
    const PI2=3.14;
    echo KURUM;
    echo 2*PI*10;

    // ÖNEMLİ! Const ile sabit tanımlaması daima bir PHP dosyasının en başında yapılmalıdır. Fonksiyon, karşılaştırma veya döngü içinde tanımlanamaz.

    ?>



 </body>
</html>
