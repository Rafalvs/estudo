import java.util.Scanner;

public class Main {
    public static void main(String[] args)
    {
        //ex01

        Scanner input = new Scanner(System.in);
        
        System.out.println("Qual a velocidade do carro?");
        int vel_carro = input.nextInt();
        System.out.println("Qual a velocidade permitida?");
        int vel_permitida = input.nextInt();
        
        int diferenca = vel_carro - vel_permitida;
        
        if (vel_carro < 0 || vel_permitida < 0)
        {
            System.out.println("Velocidade inexistente");
        }
        else if (vel_carro <= vel_permitida)
        {
            System.out.println("Tudo certo rei (y)");
        }
        else if (diferenca < 10)
        {
            System.out.println("Multa de R$80.00");
        }
        else if (diferenca < 40)
        {
            System.out.println("Multa de R$120.00");
        }
        else
        {
            System.out.println("Multa de R$200.00");
        }

        // ex 02

        Scanner input = new Scanner(System.in);
        System.out.println("Qual seu salário");
        double salario = input.nextDouble();
        
        double vt = 0.02, vr = 0.06, ir = 0.07;
        
        double vt_desconto = salario * vt;
        double vr_desconto = salario * vr;
        double ir_desconto = salario * ir;       
        
        double descontos = vt_desconto + vr_desconto + ir_desconto;
        double total = salario - descontos;
        
        System.out.println(total);
        
        if(total > 1200.00)
        {
            ir_desconto = salario * 0.15;
            total = salario - ir_desconto;
            System.out.println("Seu salário descontado: " + total);
        }
        else
        {
            System.out.println("Não houve desconto");   
        }   
    }
}