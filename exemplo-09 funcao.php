<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //inicio Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //termino Gerente de vendas
                )
            ),
            // termino Diretor Comercial 
            //Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiros',
                'subordinados' => array(
                    //Inicio Gerente Contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //inicio Supervisor
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //termino Supervisor de Pagamentos
                        )
                    )
                ),
                //Inicio gerente de compras
                array(
                    'nome_cargo' => 'Gerente de Compras',
                    'subordinados' => array(
                        //inicio supervisor supremteos
                        array(
                            'nome_cargo' => 'Supervisor de suprimentos'
                        )
                        //termino supervisor suprementos
                    )
                )
                //termino Gerente de Compras
            )
            //termino Diretor Financeiro
        ) 
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .='<li>';

        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados'])){

            $html .= exibe($cargo['subordinados']);

        }
        $html .="</li>";
    }

    $html .= "</ul>";
    return $html;

}

echo exibe($hierarquia);

?>