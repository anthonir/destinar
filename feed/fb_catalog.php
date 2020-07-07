<?php ob_start();

    include('../conexion.php');
    include('../data/funciones/seguridad.php');
    include ('../data/info.php');


    $URLbase=str_replace('feed/','',$URLbase);    

	header("Content-Description: File Transfer"); 
	header("Content-Type: application/xml; charset=utf-8"); 
	header("Content-Disposition: attachment; filename=fb_catalog_".date('d_m_Y').".xml");
	header("Pragma: no-cache");
	header("Expires: 0"); 

	echo '<?xml version="1.0"?>';
	echo '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">';
	echo '<channel>';

    $query = @mysql_query("SELECT * FROM banner WHERE tipo = 'promociones' AND estado = 'si' ORDER BY orden ASC");

    while($row = @mysql_fetch_assoc($query)) { 

            $imagen=str_replace('../','',$row['imagen']);
            $contenido=explode('~',$row['contenido']);


 			$id=$row['idx'];
 			$title=$contenido[0];
 			$description=$contenido[1];

 			$link="https://www.destinar.com.ar/";
 			$image_link=$URLbase.str_replace('../','',$row['imagen']);

            $price=preg_replace('/[^0-9]+/', '',$contenido[4]);
            $price=number_format($price, 2, '.', '');
            
 			$price=$price.' ARS';
 			$brand="Destinar";
 			$product_type="Promociones &gt; Apart en Carilo";


		echo "
        <item>
            <id>$id</id>
            <title>$title</title>
            <description>$description</description>
            <link>$link</link>
            <image_link>$image_link</image_link>
            <condition>new</condition>
            <availability>in stock</availability>
            <price>$price</price>
            <brand>$brand</brand>
            <product_type>$product_type</product_type>
            <google_product_category>888</google_product_category>
        </item>";

        

	}

	echo '</channel>';
	echo '</rss>';


ob_end_flush();?>

