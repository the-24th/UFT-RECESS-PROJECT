#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>
#include<sys/types.h>
#include<sys/socket.h>
#include<netinet/in.h>
#include<errno.h>
#include<string.h>
#include<arpa/inet.h>

int main(){
	int sock, cli;
	struct sockaddr_in server, client;
	char msg[1024];
	unsigned int len;
	int received;
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
		
		received = 1;
		while(received)
		{
			received = recv(cli, msg, 1024, 0);
			if(received)
			{
				msg[received] = '\0';
				printf("Received message: %s\n", msg);
			}
		}
		printf("Client disconnected\n");
		close(cli);
	}
	
	close(sock);
	
	
	}
