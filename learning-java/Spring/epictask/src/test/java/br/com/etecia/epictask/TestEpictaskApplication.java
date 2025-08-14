package br.com.etecia.epictask;

import org.springframework.boot.SpringApplication;

public class TestEpictaskApplication {

	public static void main(String[] args) {
		SpringApplication.from(EpictaskApplication::main).with(TestcontainersConfiguration.class).run(args);
	}

}
