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
	int  len, i, j;
	
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
	
	while(1)
	{
		fgets(input, 1024, stdin);
		send(sock, input, strlen(input), 0);	
	}
	
	close(sock);
		
}
