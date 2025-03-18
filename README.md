# CobrancaModuloInterface

Módulo de interface que une a classe abstrata do módulo principal com os módulos específicos de cada cliente.

## Objetivo
- Criar um **contrato padrão** para os módulos de cobrança.
- Garantir que cada módulo implemente as funções esperadas pelo Core.
- Permitir que novos módulos sejam criados sem modificar o código do Core.

## Estrutura dos Projetos

- **CobrancaModuloInterface.php**: Interface principal que espelha os métodos da classe abstrata do módulo principal, garantindo que todas as implementações de clientes sigam o mesmo contrato. Esse arquivo pode ser localizado no projeto [CobrancaModuloInterface](https://github.com/brunoserrate/CobrancaModuloInterface).

- **CobrancaModulo.php**: Módulo abstrato que é utilizado no sistema principal. Esse arquivo pode ser localizado no projeto [CobrancaCoreTest](https://github.com/brunoserrate/CobrancaCoreTest).

- **ModuloCliente01.php**: Módulo de implementação de um cliente especifico. Esse arquivo pode ser localizado no projeto [CobrancaModulo1](https://github.com/brunoserrate/CobrancaModulo1).


## Instalação
```bash
composer require bruno/cobranca-modulo-interface
```
