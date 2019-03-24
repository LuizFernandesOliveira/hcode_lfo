<?php


$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                //inicio Diretor Vendas
                'suboridnados'=>array(
                    'nome_cargo'=>'Diretor de Vendas'
                )
                //Fim Diretor Vendas
            ),
            //Fim Diretor Comercial

            //inicio Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                //inicio gerente de contas a pagar
                'subordinados'=>array(
                    'nome_cargo'=>'gerrente de contas a pagar',
                    //inicio supervisor
                    'supordinados'=>array(
                        'nome_cargo'=>'supervisor'
                    )
                    //fim supervisor
                )
                //Fim gerente de contas a pagar
            )
            //Fim Diretor Financeiro
        )
    )
);

function exibe($cargos){
    $html = '<ul>';

        foreach ($cargos as $cargo){
            $html.= '<li>';

            $html.= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){

                $html.= exibe($cargo['subordinados']);

            }

            $html.= '</li>';

        }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);