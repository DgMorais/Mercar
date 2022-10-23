<div class="modal fade sale-modal-xl" tabindex="-1" role="dialog" aria-labelledby="modalSeeSale" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header p-2">
                <h5 class="modal-title"></h5>
                <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-2"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger p-3 close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="orders">
    <h4>Compras</h4>
    <div class="table_page table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Compras</th>
                    <th>Data da compra</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($list_sales)): ?>
                    <?php foreach ($sales as $sale): ?>
                        <tr>
                            <td><?=$sale->id?></td>
                            <td><?=$sale->created?></td>
                            <td><span class="success"><?=$sale->status_pagamento?></span></td>
                            <td>R$ <?=number_format($sale->valor_final, 2, ',', '.')?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button href="#" class="view-sale btn btn-link" data-toggle="modal" onclick="seeSale(<?=$sale->id?>)" data-target=".bd-example-modal-xl">Ver</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <?php if (!empty($list_sales)): ?>
            <div class="paginator">
                <ul class="pagination" style="justify-content: center;">
                    <?php if ($this->Paginator->counter(__('{{page}}')) > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href=<?="/{$group}/my-account?orders&page=1"?> title="first <<">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif;?>
                    <?php if ($this->Paginator->counter(__('{{page}}')) != 1): ?>
                        <li class="page-item">
                            <a class="page-link" href=<?="/{$group}/my-account?orders&page=" . (intval($this->Paginator->counter(__('{{page}}'))) - 1)?> title="previous >">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif;?>
                    <?php for ($page = 1; $page <= $this->Paginator->counter(__('{{pages}}')); $page++): ?>
                        <?php if (intval($this->Paginator->counter(__('{{page}}'))) == $page): ?>
                            <li class="page-item active">
                        <?php else: ?>
                            <li class="page-item">
                        <?php endif;?>
                            <a class="page-link" href=<?="/{$group}/my-account?orders&page={$page}"?>>
                                <?=$page?>
                            </a>
                        </li>
                    <?php endfor;?>
                    <?php if ($this->Paginator->counter(__('{{pages}}')) > 1): ?>
                        <?php if (!isset($_REQUEST['page']) || $this->Paginator->counter(__('{{pages}}')) != $_REQUEST['page']): ?>
                            <li class="page-item">
                                <a class="page-link" href=<?="/{$group}/my-account?orders&page=" . (intval($this->Paginator->counter(__('{{page}}'))) + 1)?> title="next >">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </li>
                        <?php endif;?>
                        <?php if (!isset($_REQUEST['page']) || $this->Paginator->counter(__('{{pages}}')) != $_REQUEST['page']): ?>
                            <li class="page-item">
                                <a class="page-link" href=<?="/{$group}/my-account?orders&page=" . $this->Paginator->counter(__('{{pages}}'))?> title="last >>">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php endif;?>
                    <?php endif;?>
                </ul>
                <p><?=$this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}'))?></p>
            </div>
        <?php endif;?>
    </div>
</div>
<script>
    function seeSale(sale_id) {
        let sale = <?= json_encode($list_sales) ?>;
        if (sale != null) {
            $.each(sale, function(index, value) {
                if (value.id == sale_id) {
                    $('.modal-title').html('');
                    $('.modal-title').html('Compra Número #' + value.id);

                    let body = $('.modal-body');
                    body.html('');
                    let div_products = $('<div />', {
                        class: 'p-3 table_page table-responsive'
                    })
                    let table_products = $('<table />', {
                        class: "table"
                    });
                    let thead_products = '<thead>\
                                            <tr>\
                                                <th></th>\
                                                <th>Nome</th>\
                                                <th>Descrição</th>\
                                                <th>Valor</th>\
                                                <th>Loja/Vendedor</th>\
                                            </tr>\
                                        </thead>'
                    table_products.append(thead_products);
                    let tbody_products = $('<tbody />');
                    
                    $.each(value.user_requests, function(i, element) {
                        if (element.product.store_id != null) {
                            var vendedor = element.product.user.store;
                        } else {
                            var vendedor = element.product.user
                        }
                        let tr_tbody_product = `\<tr>\
                                                    <td>images</td>\
                                                    <td >${element.product.nome}</td>\
                                                    <td style="max-width: 800px;"><p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">${element.product.descricao}</p></td>\
                                                    <td>${(parseFloat(element.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</td>\
                                                    <td>${vendedor.nome}</td>\
                                                </tr>`;
                        tbody_products.append(tr_tbody_product);
                    })
                    let div_sales_data = $('<div />', {
                        class: 'd-flex justify-content-between'
                    })
                    let div_cupom = $('<div />', {
                        class: 'border rounded col-4 p-3'
                    })
                    if (value.cupom_id != null) {
                        var has_cupom = true;
                        if (value.cupon.tipo_desconto == 1) {
                            var desconto = value.cupon.valor_real
                            var valor_desconto = (value.valor - value.cupon.valor_real)
                        } else {
                            var desconto = `${value.cupon.valor_porcentagem}%`
                            var valor_desconto = ((value.cupon.valor_porcentagem/100) * value.valor)
                        }
                        let div_interna_cupom = `<div class="text-center">
                                                    <h6 class="text-center"><strong>Cupom</strong></h6><hr>
                                                    <p><strong>Código do cupom utilizado</strong></p>
                                                    <p class="text-danger">${value.cupon.codigo}</p>
                                                    <p><strong>Desconto aplicado:</strong> ${desconto}</p>
                                                </div>`;
                        div_cupom.append(div_interna_cupom);
                        div_sales_data.append(div_cupom);
                    }
                    let valor_parcelas = (value.valor_final/value.parcelas)
                    let div_sale_values = $('<div />', {
                        class: 'border rounded col-7 p-3'
                    })
                    let div_interna_sale_values = `<div class="text-center col-12">
                                                        <h6 class="text-center"><strong>Dados da compra</strong></h6><hr>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-center col-6" style="border-right: 1px solid #DCDCDC;">
                                                                <p><strong>Cartão:</strong> **** **** **** 1524</p>
                                                                <p><strong>Parcelas:</strong> ${value.parcelas} x  ${valor_parcelas.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </p>
                                                                <p><strong>Status:</strong> ${value.liberado ? 'Liberado' : 'Não liberado'} </p>
                                                            </div>
                                                            <div class="text-center col-6">
                                                                <p><strong>Subtotal:</strong> ${(parseFloat(value.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
                                                                ${has_cupom ? `<p class="text-danger"><strong>Desconto:</strong> - ${(parseFloat(valor_desconto)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>` : '' }
                                                                <p><strong>Total:</strong> ${(parseFloat(value.valor_final)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
                                                            </div>
                                                        </div>
                                                    </div>`;
                    div_sale_values.append(div_interna_sale_values);

                    div_sales_data.append(div_sale_values);

                    table_products.append(tbody_products);
                    div_products.append(table_products);
                    div_products.append(div_sales_data);
                    body.append(div_products);
                }
            })
        }
        $('.sale-modal-xl').modal('show');
    }
</script>