class productoDTO {
  constructor(id, nombre_producto, precio, fk_categoriaProducto, fk_lista_ingredientes, lista_ingredientes) {
      this.id = id;
      this.nombre_producto = nombre_producto;
      this.precio = precio;
      this.fk_categoriaProducto = fk_categoriaProducto;
      this.fk_lista_ingredientes = fk_lista_ingredientes;
      this.lista_ingredientes;
  }
}