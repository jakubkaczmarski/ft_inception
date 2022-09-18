SRCS := srcs/docker-compose.yaml
NAME := inception

all: $(NAME)


$(NAME) : $(SRCS)
	@docker system prune -f
	@docker-compose -f $(SRCS) up --build

clean:
	@docker-compose -f $(SRCS) down

