# Rusky Vet - Code Test -Yejin Chung-

## Descrição

Este projeto foi desenvolvido como parte do processo seletivo da Energié.
O objetivo foi implementar funcionalidades essenciais para um sistema de gestão de saúde canina utilizando o framework Laravel.


## Funcionalidades Implementadas

### Cadastro de Cachorros

* Cadastro completo com todos os campos obrigatórios
* Suporte para upload de foto do cachorro

### Agendamento de Consultas

* Criação de consultas por clientes
* Prevenção de horários duplicados
* Restrição de agendamentos aos finais de semana
* Apenas uma consulta permitida por horário

### Área do Cliente

* Visualização das consultas agendadas pelo próprio usuário

### Área do Veterinário

* Acesso a todas as consultas agendadas
* Adição de observações em cada consulta
* Atualização automática do status para "finalizada"
* Registro do veterinário responsável pela consulta


## Decisões Técnicas

* Utilização de validações nos controllers para garantir a integridade dos dados
* Implementação simplificada sem uso de AJAX devido ao tempo limitado
* Estruturação do projeto seguindo o padrão MVC do Laravel


## Problemas Encontrados

* O projeto inicial estava incompleto (ausência de alguns controllers e models)
* Necessidade de configuração manual do ambiente (PHP, Composer e extensões)


## Credenciais de Teste

Cliente:

* Email: [joaodasilva@gmail.com](mailto:joaodasilva@gmail.com)
* Senha: 123123123

Veterinário:

* Email: [mariovet@gmail.com](mailto:mariovet@gmail.com)
* Senha: 123123123
