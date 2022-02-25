
<?php //Llamar el ID de la categoria
$catID = the_category_ID($echo=false); echo $catID; ?> 

<?php //Llamar el nombre de la categoria por medio del ID
echo strtolower(get_cat_name( $category_id = 3 ));?> 

<?php //La ultima categoria seleccionada
echo strtolower(!empty(get_the_category($post)) ? get_the_category($post)[0]->name : '') ; ?> 


<?php //Todas las categorias seleccionadas
$categories = get_the_category(); $category_list = join( ' ', wp_list_pluck( $categories, 'name' ) ); echo strtolower(wp_kses_post( $category_list )); ?>">