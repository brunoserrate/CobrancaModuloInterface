<?php

namespace CobrancaModuloInterface\Core;

interface CobrancaModuloInterface {

    /**
     * Gera um acordo com base nos dados do cliente
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function gerarAcordo(array $dados): array;

    /**
     * Gera as parcelas de um acordo
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @param array $acordo acordo gerado pelo método gerarAcordo
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function gerarParcelas(array $dados, array $acordo): array;

    /**
     * Busca um acordo com base nos dados do cliente
     *
     * @param array $dados dados do cliente como nome, valor da dívida e número de parcelas
     * @return array $resultado retorna um array com o resultado da operação (sucesso, mensagem, dados)
     */
    public function buscarAcordo(array $dados): array;
}