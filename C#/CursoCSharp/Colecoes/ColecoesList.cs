using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Colecoes
{
    class Produto
    {
        public string Nome;
        public double Preco;

        public Produto( string nome, double preco )
        {
            this.Nome = nome;
            this.Preco = preco;
        }
    }
    internal class ColecoesList
    {
        public static void Executar()
        {
            var livro = new Produto("Game of Throne", 49.9);

            var carrinho = new List<Produto>();
            carrinho.Add(livro);

            var combo = new List<Produto>
            {
                new Produto("Camiseta", 29.9),
                new Produto("8 temporada Game of Thrones", 99.9),
                new Produto("Poster", 10)
            };

            carrinho.AddRange(combo);
            Console.WriteLine(carrinho.Count);
            carrinho.RemoveAt(3);

            foreach (var item in carrinho)
            {
                Console.WriteLine(carrinho.IndexOf(item));
                Console.WriteLine($" {item.Nome} {item.Preco}");
            }
        }
    }
}
