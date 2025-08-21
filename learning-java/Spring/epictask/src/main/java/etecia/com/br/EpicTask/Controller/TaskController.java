package etecia.com.br.EpicTask.Controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
RequestMapping("/tasks")
public class TaskController {
    @GetMapping
    public String listTasks(){
        var task = new Task(1L, "CriarBD", "Criar banco mysql", 50, 0);

        return tasks;
    }
}
