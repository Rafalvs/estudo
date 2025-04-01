package etecia.ds.projeto;
import java.util.Scanner;

public class Main {

    public static void main(String[] args)
    {
        System.out.println("Sistema de Cadastro\n");

        String nome = "", endereco = "", email = "", telefone = "";
        int alterar;
        int cont = 0;

        Scanner input = new Scanner (System.in);
        System.out.println("MENU\n1 - Cadastrar\n2 - Alterar\n3 - Consultar\n4 - Excluir\n5 - Sair\nEscolha a sua opção: ");
        int op = input.nextInt();
        while (op != 5){
 
             Scanner cad = new Scanner (System.in);
             Scanner alt = new Scanner (System.in);

        if (op == 1)
        {
            if (cont != 0)
            {
                System.out.println("Sem espaço em B.D.");
            }

            else if (cont == 0){
                System.out.println("Digite o nome");    
                nome = cad.nextLine();
 
                System.out.println("Digite o endereço");
                endereco = cad.nextLine();
 
                System.out.println("Digite o email");
                email = cad.nextLine();
 
                System.out.println("Digite o telefone");
                telefone = cad.nextLine();
            }
            cont++;
        }

        else if (op == 2)
        {
            System.out.println("\nQual campo deverá ser alterado?\n1 - Nome\n2 - Endereço\n3 - Email\n4 - Telefone\n");
            alterar = input.nextInt();
            if (alterar == 1)
            {
                System.out.println("Digite o nome: ");    
                nome = alt.nextLine();
            }
            else if (alterar == 2){
                System.out.println("Digite o endereço: ");
                endereco = alt.nextLine();
            }
            else if(alterar == 3){
                System.out.println("Digite o email: ");
                email = alt.nextLine();
            }
            else if (alterar == 4){
                System.out.println("Digite o telefone: ");
                telefone = alt.nextLine();
            }
        }

        else if (op == 3)
        {
            System.out.println("\nNome: " + nome + "\nEndereço: " + endereco + "\nEmail: " + email + "\nTelefone: " + telefone + "\n");
        }  

        else if (op == 4)
        {
            nome = "";
            endereco = "";
            email = "";
            telefone = "";
            if (cont > 0)
            {
                cont--;
            }
        }

        else if (op > 5)
        {
        System.out.println("Opção inválida");
        }
            System.out.println("MENU\n1-Cadastrar\n2-Alterar\n3-Consultar\n4-Excluir\n5-Sair\nEscolha a sua opção");
            op = input.nextInt();
        }
    }
}