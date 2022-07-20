using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    class Carro
    {
        public string Modelo;
        public string Fabricante;
        public int Ano;

        public Carro( string modelo, string fabricante, int ano )
        {
            this.Modelo = modelo;
            this.Fabricante = fabricante;
            this.Ano = ano;
        }

        public string ApresentarCarro()
        {
            return string.Format($"O automóvel {this.Modelo} é fabricado pela {this.Fabricante} e é do ano {this.Ano}");
        }

        public void ApresentarCMD()
        {
            Console.WriteLine(this.ApresentarCarro());
        }

    }

    internal class Construtor
    {
        public static void Executar()
        {
            var carro1 = new Carro("Xr3", "Ford", 1996);
            carro1.ApresentarCMD();
        }
    }
}
