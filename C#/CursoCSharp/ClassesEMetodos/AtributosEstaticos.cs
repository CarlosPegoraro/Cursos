using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    class Produto
    {
        public string Nome;
        public double Preco;
        public static double Desconto = 0.1;

        public Produto(string nome, double preco)
        {
            this.Nome = nome;
            this.Preco = preco;
        }

        public double CalcularDesconto()
        {
            var valorFinal = this.Preco - (this.Preco * Desconto);
            return valorFinal;
        }
    }
    internal class AtributosEstaticos
    {
        public static void Executar()
        {
            var produto1 = new Produto("Caneta", 1.3);
            var produto2 = new Produto("Borracha", 1.5);

            Console.WriteLine($"O produto {produto1.Nome} custa {produto1.Preco} e está com um desconto de {produto1}");
            Console.WriteLine($"O produto {produto2.Nome} custa {produto2.Preco} e está com um desconto de {produto2}");
            Produto.Desconto = 0.5;
            Console.WriteLine($"O valor do produto {produto1.Nome} com desconto é {produto1.CalcularDesconto()}");
            Console.WriteLine($"O valor do produto {produto2.Nome} com desconto é {produto2.CalcularDesconto()}");
        }
    }
}
