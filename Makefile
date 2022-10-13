SRC	:= ./srcs/docker-compose.yml
NAME	:= inception

all: ${NAME}

${NAME}: ${SRC}
	@docker system prune -f
	@docker-compose -f ${SRC} up --build

clean:
	@docker-compose -f ${SRC} down

