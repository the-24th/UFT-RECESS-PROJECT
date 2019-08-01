#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>
#include<sys/types.h>
#include<sys/socket.h>
#include<netinet/in.h>
#include<errno.h>
#include<string.h>
#include<arpa/inet.h>
#include<ctype.h>
#include<sys/stat.h>

int main(int argc, char **argv){
	int sock, cli;
	struct sockaddr_in server, client;
	char msg[1024];
	unsigned int len;
	int received;
	
	char *token;
	char token1[1024];
	char token2[1024];
	char token3[1024];
	char token4[1024];
	char name[1024];
	char name2[1024];
	char date[1024];
	char gender[1024];
	char agent[1024];
	char input[1024];
	char district[1024];
	char *th,*ls;
	char buffer[1024];
	char k;
	int words = 0;
	int vh = 0;
	int c,size;
	int fsize;
	char sign[100];
	char sim[200];
	char let[27] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	int aa,bb = 0;
	int tt;
	char logname1[200],logname2[200],file[200];
	char username[200];
	char pnum[2],pname1[200],pname2[200],pgender[200],pdistrict[200],ptel[200],pcity[200],pdate[200],payment[100],psign[100];
	
	
   
	int a,b;

	if((sock=socket(AF_INET, SOCK_STREAM, 0)) == -1)
	{
		perror("socket: ");
		exit(-1);
	}
	
	server.sin_family = AF_INET;
	server.sin_port = htons(10000);
	server.sin_addr.s_addr = INADDR_ANY;
	bzero(&server.sin_zero, 0);
	
	len = sizeof(struct sockaddr_in);
	
	if((bind(sock, (struct sockaddr *)&server, len)) == -1)
	{
		perror("bind");
		exit(-1);
	}
	
	if((listen(sock, 5)) == -1)
	{
		perror("listen"); 
		exit(-1);
	}
	
	while(1)
	{
		if((cli = accept(sock, (struct sockaddr *)&client, &len)) == -1)
		{
			perror("accept");
			exit(-1);
		}
		printf("New client connected from port no %d and IP %s\n",ntohs(client.sin_port), inet_ntoa(client.sin_addr));
		
		a = recv(cli, msg, 1024, 0);
		strcpy(district,msg);
		printf("You typed :%s\n",district);
		strcat(district,".txt");
		there:
		b = recv(cli, msg, 1024, 0);
		printf("Name : %s",msg);
			char *file = argv[1];
			file = "agents.txt";
			FILE *ptr;
   				ptr = fopen(file, "r");
			  	while(!feof(ptr))
       			{
        		fscanf(ptr, "%[^,],%s\n", logname1, logname2);
			if(strcmp(logname1,msg)==0 || strcmp(logname2,msg) == 0)
			{
				send(cli, "Valid user-name", 16, 0);
				strcpy(username,msg);
				goto here;
			}
			
			
				   }	
				
		send(cli, "Invalid user-name", 18, 0);
		goto there;	
	
		fclose(ptr);
		
		here:
		received = 1;
		
		while(received)
		{
			
			received = recv(cli, msg, 1024, 0);
			if(received)
			{
			msg[received] = '\0';
			printf("\nReceived message: %s", msg);
			token = strtok(msg," ");
			strcpy(token1,token);
			strcpy(token2,token + 10);
			strcpy(token3,token + 7);
			strcpy(token4, token + 5);
			
			if(strcmp(token1,"Addmember") == 0)
			{
				
			
				FILE *fp;
   				fp = fopen(district,"r+");
				th = strstr(token2,".txt");
				
				size = 0;


				   if(th != NULL)
				   {
					struct stat store;
					int exist = stat(token2,&store);
					if(exist == 0)
					{
					printf("You want to add a file");
					FILE *tp;
					tp = fopen(token2,"r+");
				if(tp != NULL){
					fseek(tp, 0, SEEK_END);
					size = ftell(tp);
					rewind(tp);
				}
				
				fclose(tp);
				if (size == 0)
				{
					send(cli, "The file is empty", 18, 0);
					goto here;
				}
				else{
					fclose(fp);
					FILE *src;
					FILE *dest;
					src = fopen(token2,"r");
					dest = fopen(district,"w");
					printf("\nYou want to add a file");
					
			
				c = getc(src);
				while(c != EOF)
				{
				
				fputc(c, dest);
				
				c = getc(src);
				}

				fclose(src);
				fclose(dest);
				
				
				send(cli, "File sent successfully", 23, 0);
				
			goto here;
				}
					}
					else{
						send(cli, "File does not exist", 23, 0);
						goto here;
					}
				
			 
			    }
				if(strcmp(token2,"Signature")==0){
					send(cli, "Invalid member", 15, 0);
					goto here;
				}

				for(aa=0; token2[aa] != '\0'; aa++)
				{
					if(token2[aa] == ' ')
					{
						bb++;
					}
				}
				if(bb > 4 || bb < 3 || bb == 0)
				{
				send(cli, "Invalid number of inputs", 25, 0);	
				goto here;
				}
				fsize = 0;
				if(fp != NULL){
					fseek(fp, 0, SEEK_END);
					fsize = ftell(fp);
					rewind(fp);
				}
				if (fsize == 0)
				{
				fp = fopen(district,"w");
				printf("\n%s",token2);
				fputs(token2, fp);
				send(cli, "Member added successfully", 26, 0);
				fputs("\n",fp);
				fclose(fp);
				}
				
				
				else{
				fp =fopen(district,"a");
				printf("\n%s",token2);
				fputs(token2, fp);
				send(cli, "Member added successfully", 26, 0);
				fputs("\n",fp);
				fclose(fp);
			}
			
			}
			else if(strcmp(token1,"Search") == 0)
			{
				printf("\nYou want to search for %s\n",token3); 
				
				char *fname = argv[1];
				fname = district;
				FILE *ptr;
   				ptr = fopen(fname, "r");
			  	while(!feof(ptr))
       			{
        		fscanf(ptr, "%[^ ] %[^ ] %[^ ] %[^ ] %s\n", name, name2 , date, gender, agent);
        		if(strcmp(name,token3) == 0||strcmp(name2,token3) == 0 || strcmp(agent,token3) == 0 || strcmp(date,token3) == 0)
        		{
					printf("A match has been found\n");
					printf("Name of member: %s\n", name);
					send(cli, name, strlen(name), 0);
					send(cli, " ", 1, 0);
					send(cli, name2, strlen(name2), 0);
					send(cli, " ", 1, 0);
					printf("Date: %s\n",date);
					send(cli, date, strlen(date), 0);
					send(cli, " ", 1, 0);
					printf("Gender: %s\n",gender);
					send(cli, gender, strlen(gender), 0);
					send(cli, " ", 1, 0);
					printf("Name of agent: %s\n",agent);
					send(cli, agent, strlen(agent), 0);
					send(cli, " ", 1, 0);
					goto here;
					
            
        		}
	
    }
	send(cli, "No search results", 18, 0);
	fclose(ptr);

			}
			
			else if(strcmp(token1,"check_status") == 0)
			{
		
			
		char *sfile = argv[1];
    	sfile = district;	
  		FILE* fs;
    	fs = fopen(sfile,"r");

    	while(!feof(fs))
    	{
        fscanf(fs, "%[^ ] %s\n", sign, sim);
        if(strcmp(sign,"Signature") == 0)
        {
			printf(" %c",sim[0]);
			printf("You want to check");
			for(tt=0; tt < 29; tt++)
			{
				if(sim[0] == let[tt]){
					send(cli, "This file is valid", 20, 0);
					
					goto here;
				}
				
			}
           
			
            
		}
		

    }
	printf("\n%d",tt);
	 send(cli, "The file is invalid", 20, 0);
fclose(fs);  


			}
			else if(strcmp(token1,"sign") == 0)
			{
				
				bzero(msg, 0);
				received = 0;
				received = recv(cli, msg, 7, 0);
				if(strcmp(msg,"Invalid") == 0){
					send(cli, "Invalid signature", 17, 0);
					goto here;
				}
				
				printf("Signature %c\n",msg[0]);
				FILE *fp;
				fp = fopen(district, "a");
				fputs("\n ",fp);
				fputs("Signature ",fp);
				fputc(msg[0],fp);
				fputs(" ",fp);
				fputs("\n\n",fp);
				send(cli, "Signature received", 19, 0);
				fclose(fp);
				goto here;
			}
			else if(strcmp(token1,"get_statement") == 0)
			{
				char *pp = argv[1];
				pp = "payment.txt";
				FILE *pay;
				pay = fopen(pp,"r");
				
				while(!feof(pay))
       			{
        		fscanf(pay, "%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%[^,],%s\n", pnum, pname1 , pname2, pgender, pdistrict, pnum, pcity,pdate, psign, payment);
        		if(strcmp(pname1,username) == 0 ||strcmp(pname2,username) == 0)
        		{
					printf("A match has been found\n");
					printf("Payment :%s",payment);
					send(cli, payment, strlen(payment), 0);
					goto here;
					
            
        		}
				
			}
			fclose(pay);
				send(cli, "No payments found", 18, 0);
				goto here;
			}
			else
			{
				send(cli, "Invalid entry", 14, 0);
			}
			
			}
			
		}
		printf("Client disconnected\n");
		close(cli);
	}
	
	close(sock);
	
	
	}
