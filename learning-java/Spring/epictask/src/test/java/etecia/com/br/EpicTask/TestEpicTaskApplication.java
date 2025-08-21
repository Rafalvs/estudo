package etecia.com.br.EpicTask;

import org.springframework.boot.SpringApplication;

public class TestEpicTaskApplication {

	public static void main(String[] args) {
		SpringApplication.from(EpicTaskApplication::main).with(TestcontainersConfiguration.class).run(args);
	}

}
