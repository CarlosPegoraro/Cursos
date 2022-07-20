using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp
{
    public class Carro
    {
        protected readonly int VelocidadeMaxima;
        int VelocidadeAtual;

        public Carro( int velocidadeMaxima )
        {
            this.VelocidadeMaxima = velocidadeMaxima;
        }

        protected int AlterarVelocidade( int delta )
        {
            int novaVelocidade = this.VelocidadeAtual + delta;

            if (novaVelocidade < 0)
            {
                this.VelocidadeAtual = 0;
            }
            else if (novaVelocidade > this.VelocidadeMaxima)
            {
                this.VelocidadeAtual = this.VelocidadeMaxima;
            } else
            {
                this.VelocidadeAtual = novaVelocidade;
            }

            return this.VelocidadeAtual;
        }

        //o virtual serve para poder sobreescrever um metodo
        public virtual int Acelerar()
        {
            return this.AlterarVelocidade(5);
        }

        public virtual int Frear()
        {
            return this.AlterarVelocidade(-5);
        }
    }

    public class Uno : Carro
    {
        public Uno() : base(200) 
        {

        }
    }

    public class Ferrari : Carro
    {
        public Ferrari() : base(360)
        {

        }

        //Overvide serve para sobreescrever um metodo
        public override int Acelerar()
        {
            return this.AlterarVelocidade(-15);
        }

        public new int Frear()
        {
            return this.AlterarVelocidade(-15);
        }
    }
    internal class POO
    {
        public static void Executar()
        {
        
        }
    }
}
