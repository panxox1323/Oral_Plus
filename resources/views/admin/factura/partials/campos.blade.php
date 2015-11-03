<div class="detalle">

    <button type="button" onclick="nuevoInsumo();" class="btn btn-success"><span class="icon-plus"></span> A&ntilde;adir Insumo</button>
    <table class="table table-striped table-bordered table-hover">
        <tr class="info ">
             <th class="text-center item-factura">Item</th>
             <th class="text-center item-insumo">Insumo</th>
             <th class="text-center item-cantidad">Cantidad</th>
             <th class="text-center item-valor">Valor</th>
             <th class="text-center item-subtotal">SubTotal</th>
        </tr>
        <tbody id="tbDetalle">

        </tbody>
    </table>
    <div>
        <button type="submit" class="btn btn-info"><span class="icon-archive"></span> Guardar</button>
        <a href="{!! route('admin.factura.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel-circle"></span> Cancelar</a>
    </div>
    <div class="valores-factura">
        <div id="divTotales">
            <table>
                <tr>
                    <th>Subtotal</th>
                    <td>
                        <input class="text-center" readonly="disabled" type="text" name="txtSubtotal" id="txtSubtotal">
                    </td>
                </tr>
                <tr>
                    <th>Iva</th>
                    <td>
                        <input class="text-center" readonly="readonly" type="text" name="txtIva" id="txtIva">
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>
                        <input class="text-center" readonly="readonly" type="text" name="txtTotal" id="txtTotal">
                    </td>
                </tr>
            </table>
        </div>
    </div>


</div>
<script type="text/javascript">

    $var =1;

    document.getElementById('txtSubtotal').value= 0;
    document.getElementById('txtIva').value= 0;
    document.getElementById('txtTotal').value= 0;

    function calcular()
    {
        cantidad = document.getElementsByName('det_cantidad[]');
        precios = document.getElementsByName('det_valor[]');
        subtotal = document.getElementsByName('det_subtotal[]');

        var_subtotal = 0;
        for(x=0; x < cantidad.length; x++)
        {
            sub = cantidad[x].value * precios[x].value;
            subtotal[x].value = sub;
            var_subtotal = var_subtotal + sub;
            $var = x;
        }
        iva = var_subtotal * 0.19;
        document.getElementById('txtSubtotal').value =  var_subtotal;
        document.getElementById('txtIva').value =  iva;
        document.getElementById('txtTotal').value =  iva+var_subtotal;
    }



    function crearItem(nombre)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.setAttribute('name', nombre);
        if($var == 1)
        {
            valor = 1;
            $var = $var +1;
        }
        else
        {
            valor = valor + 1;

        }
        txt.readOnly = true;
        txt.classList.add('item-factura', 'text-center');
        txt.setAttribute('value', valor);
        td.appendChild(txt);
        return td;
    };

    function crearCantidad(nombre, readonly, evento, evento2, evento3)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';
        if(readonly)
        {
            txt.setAttribute('readonly', readonly);
        }
        txt.setAttribute('onkeyup', evento);
        txt.setAttribute('onkeypress', evento2);
        txt.classList.add('item-cantidad', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
        txt.focus();
    };

    function crearInsumo()
    {
        td       = document.createElement('td');
        td.innerHTML = '{!! Form::select("id_proveedor", $data , null, ["class" => "form-control", "id" => "selector"]) !!}';

        return td;
    }

    function crearValor(nombre, readonly, evento, evento2)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';

        if(readonly)
        {
            txt.setAttribute('readonly', readonly);
        }
        txt.setAttribute('onkeyup', evento);
        txt.setAttribute('onkeypress', evento2);
        txt.classList.add('item-valor', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
    };

    function crearSubtotal(nombre, readonly)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';
        if(readonly) {
            txt.setAttribute('readonly', readonly);
        }
        txt.classList.add('item-subtotal', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
    };


    function nuevoInsumo()
    {
        destino = document.getElementById('tbDetalle');
        tr      = document.createElement('tr');
        tr.appendChild(crearItem('det_item[]'));
        tr.appendChild(crearInsumo('det_insumo[]'));
        tr.appendChild(crearCantidad('det_cantidad[]', false, 'calcular()', 'return soloNumeros(event)'));
        tr.appendChild(crearValor('det_valor[]', false, 'calcular()', 'return soloNumeros(event)'));
        tr.appendChild(crearSubtotal('det_subtotal[]', true));
        td = document.createElement('td');
        x  = document.createElement('a');
        x.innerHTML = '<span class="icon-cancel-circle"></span>';
        x.classList.add('btn', 'btn-warning', 'btn-xs');
        x.title = "Eliminar";
        x.setAttribute('onclick', 'eliminarFila(this)');
        td.appendChild(x);
        tr.appendChild(td);
        destino.appendChild(tr);
    }

    function eliminarFila(btn)
    {
        if(confirm('Desea Elimiar esta fila'))
        {
            fila = btn.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
            $var = 1;

            document.getElementById('txtSubtotal').value =  var_subtotal;
            document.getElementById('txtIva').value =  iva;
            document.getElementById('txtTotal').value =  iva+var_subtotal;
        }

    }

    function soloNumeros(e) {

        e = (e) ? e : window.event

        var charCode = (e.which) ? e.which : e.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {

            status = "This field accepts numbers only."

            return false

        }

        status = ""

        return true

    }



</script>


