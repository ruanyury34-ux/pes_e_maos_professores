# Estrutura basica para consultas SQL

# SELECT      - quais informações 
# FROM        - de qual tabela ?
# WHERE       - com quais  condições ?
# ORDER BY    - em qual ordem ?


# 1 consultas: Lista de serviços ativos, organizados por ordem cresente:

SELECT * FROM tbl_servico WHERE tbl_servico.status_servico = 'ATIVO' ORDER BY tbl_servico.nome_servico ASC;

# 2 consultas: Lista de nome  e valor  dos serviços, organizados  por ordem cresente do menor para o maior todos <= 80.00:
SELECT tbl_servico.nome_servico, tbl_servico.valor_servico FROM `tbl_servico` WHERE tbl_servico.duracao_servico < 80.00 ORDER BY tbl_servico.valor_servico ASC;

Operadaores     | Siguinficado
    =             | Ingual
    <>            | Diferentes
    >             | Maior
    <             | Menor
    >=            | Maior ou igual 
    <=            | Menor ou igual

# Pesquisa com o operador  -  AND 
## - AND (verificar mais de uma condição)
## - LIKE (LIKE '%GEL%') localiza palavras no texto
SELECT * FROM tbl_servico WHERE tbl_servico.status_servico = 'ATIVO' AND tbl_servico.nome_servico LIKE '%ge%' ORDER BY tbl_servico.nome_servico ASC;

## OR quando o retorno da busca conter condições diferentes
SELECT * FROM `tbl_funcionario` WHERE tbl_funcionario.tipo_funcionario = 'Administrador' OR tbl_funcionario.tipo_funcionario = 'Recepcionista';

LIKE símbolo no final ('Ana%'): começa com Ana....
LIKE símbolo no inicio ('%silva'): Termina com silva....
LIKE símbolo no meio ('%ge%'): Contem ge....

# Filtro com intervalo BETWEEN
SELECT tbl_servico.nome_servico, tbl_servico.valor_servico FROM `tbl_servico` WHERE tbl_servico.valor_servico BETWEEN 30.00 AND 90.00;

# Ordenar os dados por mais de uma coluna
SELECT * FROM `tbl_servico` WHERE tbl_servico.status_servico = 'ATIVO' ORDER BY descricao_servico DESC, valor_servico ASC;

# Limitar os Resutados LIMIT
SELECT * FROM `tbl_servico` ORDER BY nome_servico ASC LIMIT 5;

# Pesquisa por data  ordenado por hora
SELECT * FROM `tbl_agendamento` WHERE tbl_agendamento.data_agendamento = '2026-10-20' ORDER BY tbl_agendamento.horario_agendamento ASC;

