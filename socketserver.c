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
	char sign[1];
	char sim[200];
	char let[28] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	int aa,bb = 0;
   
	int a;

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
		

		
		received = 1;
		here:
		while(received)
		{
			
			received = recv(cli, msg, 1024, 0);
			if(received)
			{
			msg[received] = '\0';
			printf("\nReceived message: %s", msg);
			token = strtok(msg," ");
			strcpy(token1,token);
			strcpy(token2,token + 11);
			strcpy(token3,token + 7);
			strcpy(token4, token + 5);
			
			if(strcmp(token1,"Add_member") == 0)
			{
				
			
				FILE *fp;
   				fp = fopen(district,"r+");
				th = strstr(token2,".txt");
				
				size = 0;


				   if(th != NULL)
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
					tp = fopen(token2,"r");
					fp = fopen(district,"a");
					printf("\nYou want to add a file");
					
			
				c = getc(tp);
				while(c != EOF)
				{
				fgets(buffer,1024, tp);
				fputs(buffer, fp);
				printf("\n%s",buffer);
				c = getc(tp);
				}
				
				

				
				
				fclose(tp);
				
				
				send(cli, "File sent successfully", 23, 0);
			
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
				if(bb > 3 )
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
				for(aa=0; token2[aa] != '\0'; aa++)
				{
					if(token3[aa] == ' ')
					{
						bb++;
					}
				}
				if(bb > 3)
				{
				send(cli, "Your search criteria should only have 1 item", 45, 0);	
				goto here;
				}
				char *fname = argv[1];
				fname = district;
				FILE *ptr;
   				ptr = fopen(fname, "r");
			  	while(!feof(ptr))
       			{
        		fscanf(ptr, "%[^ ] %[^ ] %[^ ] %s\n", name, date, gender, agent);
        		if(strcmp(name,token3) == 0 || strcmp(agent,token3) == 0 || strcmp(date,token3) == 0)
        		{
					printf("A match has been found\n");
					printf("Name of member: %s\n", name);
					send(cli, name, strlen(name), 0);
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
					break;
					
            
        		}
	
    }
	

			}
			else if(strcmp(token1,"check_status") == 0)
			{
			
			
  			FILE* fn;
    	char *name = argv[1];
    	name = district;
    	fn = fopen(name,"r+");

    	while(!feof(fn))
    	{
        fscanf(fn, "%[^ ] %s\n", sign, sim);
        if(strcmp(sign,"Signature") == 0)
        {
			
            send(cli, "The file is valid", 18, 0);
            
		}
		

    }
	 send(cli, "The file is invalid", 20, 0);
fclose(fn);  


			}
			else if(strcmp(token1,"sign") == 0)
			{
				printf("You want to sign\n");
				bzero(msg, 0);
				received = 0;
				received = recv(cli, msg, 1, 0);
				printf("Signature %c\n",msg[0]);
				FILE *fp;
				fp = fopen(district, "a");
				fputs("Signature ",fp);
				fputc(msg[0],fp);
				fputs("\n",fp);
				send(cli, "Signature received", 19, 0);
				fclose(fp);
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
