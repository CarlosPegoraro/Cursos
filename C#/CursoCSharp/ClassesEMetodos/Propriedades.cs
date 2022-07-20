using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    public class CarroOpcional
    {
        double desconto = 0.1;

        string nome;
        public string Nome
        {
            get { return "Opcional: " + this.nome; }
            set { this.nome = value; }
        } 

        //propriedade autoimplementada
        public double Preco { get; set; }

        //Somente Leitura
        public double PrecoComDesconto
        {
            get => this.Preco - (this.desconto * this.Preco); //lambda
        }

        public CarroOpcional()
        {
        
        }

        public CarroOpcional(string nome, double preco)
        {
            this.Nome = nome;
            this.Preco = preco;
        }
    }
    internal class Propriedades
    {
        
        public static void Executar()
        {
            var op1 = new CarroOpcional("Ar condicionado", 3499.99);
            Console.WriteLine(op1.PrecoComDesconto);

            var op2 = new CarroOpcional();
            op2.Nome = "Direcao Elétrica";
            op2.Preco = 6500.69;

            Console.WriteLine(op1.Nome);
            Console.WriteLine(op1.Preco);
            Console.WriteLine(op1.PrecoComDesconto);

            Console.WriteLine(op2.Nome);
            Console.WriteLine(op2.Preco);
            Console.WriteLine(op2.PrecoComDesconto);
        }
    }
}
