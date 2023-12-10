import pandas as pd
tabela = pd.read_excel("./Vendas (1).xlsx")

# Faturamento por loja
# faturamentoPorLoja = tabela[['ID Loja', 'Valor Final']]
# faturamentoPorLoja = tabela[['ID Loja', 'Valor Final']].groupby('ID Loja').sum()
# print(faturamentoPorLoja)
# faturamentoPorProduto = tabela[['ID Loja', 'Produto', 'Valor Final']]
faturamentoPorProduto = tabela[['ID Loja', 'Produto', 'Valor Final']].groupby(['ID Loja', 'Produto']).sum()
print(faturamentoPorProduto)

# UMa possivel solucao é implementar a venda de bermudas lisas em todas as lojas, ja que ela eh o produto com maior faturamento