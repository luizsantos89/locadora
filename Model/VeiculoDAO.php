<?php
    require('../includes/conexao.inc');
    require('Veiculo.php');

    class VeiculoDAO{   
        private $con;

        function VeiculoDAO(){
                $c = new Conexao();
                $this->con = $c->getConexao();
        }

        public function incluirVeiculo($veiculo){
            $sql = $this->con->prepare("insert into veiculos (placa, nome, anoFabricacao, fabricante, opcionais, motorizacao, valorBase, id_categoria)"
                    . " values (:placa, :nome, :anoFabricacao, :fabricante, :opcionais, :motorizacao, :valorBase, :id_categoria)");

            $sql->bindValue(':placa', $veiculo->placa);
            $sql->bindValue(':nome', $veiculo->nome);
            $sql->bindValue(':anoFabricacao', $veiculo->anoFabricacao);
            $sql->bindValue(':fabricante', $veiculo->fabricante);
            $sql->bindValue(':opcionais', $veiculo->opcionais);
            $sql->bindValue(':motorizacao', $veiculo->motorizacao);
            $sql->bindValue(':valorBase', $veiculo->valorBase);
            $sql->bindValue(':id_categoria', $veiculo->id_categoria);
            $sql->execute();

        }
        
        public function getVeiculos() {
            $query = "SELECT * FROM veiculos ORDER BY fabricante";
            $rs = $this->con->query($query);

            $lista = array();
        
            $veiculo = new Veiculo();
            
            while ($veiculo = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $veiculo;
            }

            return $lista;
        }
    }