#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>
#include<sys/types.h>
#include<sys/socket.h>
#include<netinet/in.h>
#include<errno.h>
#include<string.h>
#include<arpa/inet.h>



int main() {
	struct sockaddr_in remote_server;
	int sock;
	char input[1024], trial[4];
	char *token;
	char msg[1024];
	char token1[1024];
	int  len, i, j;
	int received;
	char symbol;
    int a,b;
	
	if((sock=socket(AF_INET, SOCK_STREAM, 0)) == -1)
	{
		perror("socket: ");
		exit(-1);
	}
	
	remote_server.sin_family = AF_INET;
	remote_server.sin_port = htons(10000);
	remote_server.sin_addr.s_addr = INADDR_ANY;
	bzero(&remote_server.sin_zero, 0);
	
	len= sizeof(struct sockaddr_in);
	
	if((connect(sock, (struct sockaddr *)&remote_server, len)) == -1)
	{
		perror("connect");
		exit(-1);
	}
	
	
		printf("Enter the name of the district :");
		scanf("%s", input);
		send(sock, input, strlen(input), 0);
		there:
        printf("Enter your name :");	
		scanf("%s", input);
		send(sock, input, strlen(input), 0);
		a = recv(sock, msg, 1024, 0);
        printf("%s\n",msg);
        if(strcmp(msg,"Invalid user-name") == 0)
        {
            goto there;
        }

	while(1)
	{
		printf("command >> ");
		scanf(" %[^\n]",input);
		send(sock, input, strlen(input), 0);
		bzero(input,0);
		token = strtok(input," ");
		strcpy(token1,token);
		if(strcmp(token1,"sign") == 0)
		{
			
    
    
    
     char ch;
    int aa,bb,sym;
    char sign[200];
    char sim[200];
    int c[5][3];
    int A[5][3] = {{0,1,0},{1,0,1},{1,1,1},{1,0,1},{1,0,1}};//A
    int B[5][3] = {{1,1,0},{1,0,1},{1,1,0},{1,0,1},{1,1,0}};//B
    int C[5][3] = {{0,1,0},{1,0,1},{1,0,0},{1,0,1},{0,1,0}};//C
    int D[5][3] = {{1,1,0},{1,0,1},{1,0,1},{1,0,1},{1,1,0}};//D
    int E[5][3] = {{1,1,1},{1,0,0},{1,1,1},{1,0,0},{1,1,1}};//E
    int F[5][3] = {{1,1,1},{1,0,0},{1,1,0},{1,0,0},{1,0,0}};//F
    int G[5][3] = {{0,1,0},{1,0,1},{1,0,1},{1,0,1},{0,1,1}};//G
    int H[5][3] = {{1,0,1},{1,0,1},{1,1,1},{1,0,1},{1,0,1}};//H
    int I[5][3] = {{1,1,1},{0,1,0},{0,1,0},{0,1,0},{1,1,1}};//I
    int J[5][3] = {{1,1,1},{0,1,0},{0,1,0},{1,1,0},{1,1,0}};//J
    int K[5][3] = {{1,0,1},{1,1,0},{1,0,0},{1,1,0},{1,0,1}};//K
    int L[5][3] = {{1,0,0},{1,0,0},{1,0,0},{1,0,0},{1,1,1}};//L
    int M[5][3] = {{1,0,1},{1,1,1},{1,1,1},{1,0,1},{1,0,1}};//M
    int N[5][3] = {{1,1,1},{1,0,1},{1,0,1},{1,0,1},{1,0,1}};//n
    int O[5][3] = {{0,1,0},{1,0,1},{1,0,1},{1,0,1},{0,1,0}};//O
    int P[5][3] = {{1,1,0},{1,0,1},{1,1,0},{1,0,0},{1,0,0}};//P
    int Q[5][3] = {{0,1,0},{1,0,1},{1,0,1},{0,1,0},{0,1,1}};//Q
    int R[5][3] = {{1,1,0},{1,0,1},{1,1,0},{1,0,0},{1,0,1}};//R
    int S[5][3] = {{0,1,1},{1,0,0},{0,1,0},{0,0,1},{1,1,0}};//S
    int T[5][3] = {{1,1,1},{0,1,0},{0,1,0},{0,1,0},{0,1,0}};//T
    int U[5][3] = {{1,0,1},{1,0,1},{1,0,1},{1,0,1},{1,1,1}};//U
    int V[5][3] = {{1,0,1},{1,0,1},{1,0,1},{1,0,1},{0,1,0}};//V
    int W[5][3] = {{1,1,1},{1,0,1},{1,0,1},{1,0,1},{1,0,1}};//W
    int X[5][3] = {{1,0,1},{1,0,1},{0,1,0},{1,0,1},{1,0,1}};//X
    int Y[5][3] = {{1,0,1},{0,1,0},{0,1,0},{0,1,0},{0,1,0}};//Y
    int Z[5][3] = {{1,1,1},{0,0,1},{0,1,0},{1,0,0},{1,1,1}};// Z

    int a = 0, b = 0,cc=0,d=0,e=0,f=0,g=0,h=0,i=0,j=0,k=0,l=0,m=0,n=0,o=0,p=0,q=0,r=0,s=0,t=0,u=0,v=0,w=0,xx=0,yy=0,z=0;
    int x,y;

    printf("Enter 1 to print a  and enter 0 to print a blank\n");
    for(aa=0;aa<5;aa++)
    {
        for(bb=0;bb<3;bb++)
        {
        printf("Cell %d%d :",aa+1,bb+1);
        scanf("%d",&sym);
        c[aa][bb] = sym;
        }

    }
    for(aa=0;aa<5;aa++)
    {
        for(bb=0;bb<3;bb++)
        {
            if(c[aa][bb] == 1)
            {
                printf(" * ");
            }
            else if(c[aa][bb] == 0)
            {
                printf("   ");
            }
        }
    printf("\n");
    }



    for(aa=0;aa<5;aa++)
    {
        for(bb=0;bb<3;bb++)
        {
            if(c[aa][bb] == A[aa][bb])
            {
                a++;
            }
            if(c[aa][bb] == B[aa][bb])
            {
                b++;
            }
            if(c[aa][bb] == C[aa][bb])
            {
                cc++;
            }
            if(c[aa][bb] == D[aa][bb])
            {
                d++;
            }
            if(c[aa][bb] == E[aa][bb])
            {
                e++;
            }
            if(c[aa][bb] == F[aa][bb])
            {
                f++;
            }
            if(c[aa][bb] == G[aa][bb])
            {
                g++;
            }
            if(c[aa][bb] == H[aa][bb])
            {
                h++;
            }
            if(c[aa][bb] == I[aa][bb])
            {
                i++;
            }
             if(c[aa][bb] == K[aa][bb])
            {
                k++;
            }
             if(c[aa][bb] == L[aa][bb])
            {
                l++;
            }
             if(c[aa][bb] == M[aa][bb])
            {
                m++;
            }
             if(c[aa][bb] == N[aa][bb])
            {
                n++;
            }
             if(c[aa][bb] == O[aa][bb])
            {
                o++;
            }
             if(c[aa][bb] == Q[aa][bb])
            {
                q++;
            }
             if(c[aa][bb] == R[aa][bb])
            {
                r++;
            }
             if(c[aa][bb] == S[aa][bb])
            {
                s++;
            }
             if(c[aa][bb] == T[aa][bb])
            {
                t++;
            }
             if(c[aa][bb] == U[aa][bb])
            {
                u++;
            }
             if(c[aa][bb] == V[aa][bb])
            {
                v++;
            }
             if(c[aa][bb] == W[aa][bb])
            {
                w++;
            }
             if(c[aa][bb] == X[aa][bb])
            {
                xx++;
            }
             if(c[aa][bb] == Y[aa][bb])
            {
                yy++;
            }
             if(c[aa][bb] == Z[aa][bb])
            {
                z++;
            }

        }

    }
     if(a == 15)
    {

        send(sock, "A", 1 ,0);

    }
    else if(b == 15)
    {

        send(sock, "B", 1 ,0);

    }
    else if(cc == 15)
    {

        send(sock, "C", 1 ,0);

    }
    else if(d == 15)
    {

        send(sock, "D", 1 ,0);
    }
    else if(e == 15)
    {

        send(sock, "E", 1 ,0);
    }
    else if(f == 15)
    {

        send(sock, "F", 1 ,0);
    }
    else if(g == 15)
    {

        send(sock, "G", 1 ,0);
    }
    else if(h == 15)
    {

        send(sock, "H", 1 ,0);
    }
    else if(i == 15)
    {

      send(sock, "I", 1 ,0);
    }
    else if(j == 15)
    {

        send(sock, "J", 1 ,0);
    }
    else if(k == 15)
    {

        send(sock, "K", 1 ,0);
    }
    else if(l == 15)
    {

       send(sock, "L", 1 ,0);
    }
    else if(m == 15)
    {

        send(sock, "M", 1 ,0);
    }
    else if(n == 15)
    {

       send(sock, "N", 1 ,0);
    }
    else if(o == 15)
    {
        send(sock, "O", 1 ,0);
    }
    else if(p == 15)
    {
        send(sock, "P", 1 ,0);
    }
    else if(q == 15)
    {
        send(sock, "Q", 1 ,0);
    }
    else if(r == 15)
    {
        send(sock, "R", 1 ,0);
    }
    else if(s == 15)
    {
        send(sock, "S", 1 ,0);
    }
    else if(t == 15)
    {
        send(sock, "T", 1 ,0);
    }
    else if(u == 15)
    {
        send(sock, "U", 1 ,0);
    }
    else if(v == 15)
    {
        send(sock, "V", 1 ,0);
    }
    else if(w == 15)
    {
        send(sock, "W", 1 ,0);
    }
    else if(xx == 15)
    {
        send(sock, "X", 1 ,0);
    }
    else if(yy == 15)
    {
        send(sock, "Y", 1 ,0);
    }
    else if(z == 15)
    {
        send(sock, "Z", 1 ,0);
    }
	else
	{
		send(sock, "Invalid", 7 ,0);
	}
	

			
		}
		
        memset(msg, 0, sizeof(msg));
		received = recv(sock, msg, 1024, 0);
        
		if(received)
		{
			printf("%s\n",msg);
			
		}
		
		
	}
	
	close(sock);

return 0;		
}
