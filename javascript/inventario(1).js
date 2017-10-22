function producto_seleccionado(id, cod_prod, nom_prod, descripcion, exist_total, cod_proveedor, cost, precio, existencia, fecha_compra, fecha_vencimiento, existencia_min, existencia_max){

	document.getElementById('id_oculto').value = id;
	document.getElementById('txtcodigo_producto').value = cod_prod;
	document.getElementById('txtnombre_prod').value = nom_prod;
	document.getElementById('txtdesc').value = descripcion;
	document.getElementById('txttotal_existencias').value = exist_total;
	document.getElementById('combo_proveedor').value = cod_proveedor;
	document.getElementById('txtcosto').value = cost;
	document.getElementById('txtprecio').value = precio;
	document.getElementById('txtexistencia_ini').value = existencia;
	document.getElementById('txt_fecha_ingreso_compra').value = fecha_compra;
	document.getElementById('txt_fecha_vencimiento_compra').value = fecha_vencimiento;
	document.getElementById('txtexistencia_min').value = existencia_min;
	document.getElementById('txtexistencia_max').value = existencia_max;

} 

