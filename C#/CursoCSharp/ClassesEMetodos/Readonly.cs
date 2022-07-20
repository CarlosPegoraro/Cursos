using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    class Cliente
    {
        public string Nome;
        readonly DateTime Nascimento;

        public Cliente(string nome, DateTime nascimento )
        {
            this.Nome = nome;
            this.Nascimento = nascimento;
        }

        public string GetDataNascimento()
        {
            return String.Format("{0}/{1}/{2}", this.Nascimento.Day, this.Nascimento.Month, this.Nascimento.Year);
        }
    }
    internal class Readonly
    {
        public static void Executar()
        {
            var novoCliente = new Cliente("Ana Silva", new DateTime(1987, 5, 22));

            Console.WriteLine(novoCliente.Nome);
            Console.WriteLine(novoCliente.GetDataNascimento());
        }
    }
}
