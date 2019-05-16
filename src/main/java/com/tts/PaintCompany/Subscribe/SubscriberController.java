package com.tts.PaintCompany.Subscribe;

import javax.script.Invocable;
import javax.script.ScriptEngine;
import javax.script.ScriptEngineManager;
import javax.script.ScriptException;
import javax.swing.JFrame;
import javax.swing.JOptionPane;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.web.servlet.error.ErrorController;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;


@Controller
public class SubscriberController { //implements ErrorController
	
	@Autowired
	private SubscriberRepository subscriberRepository;
	
	@GetMapping (value= "/")
	public String index(Subscriber subscriber) {
		//return "form_test";
		return "index";
	}
	
//	@RequestMapping(value = "/", method = RequestMethod.POST) 
//	public String addSubscriber(Model model) { 
//	    model.addAttribute("subscriber", new Subscriber()); 
//	    return "index";
//	}
//
//	@PostMapping (value = "/")
//	public String addNewSubscriber(Subscriber subscriber, Model model) throws ScriptException, NoSuchMethodException {
//		//try {
//			subscriberRepository.save(new Subscriber(subscriber.getFirstName(), subscriber.getLastName(), subscriber.getEmail(), subscriber.getSignedUp()));
//			model.addAttribute("firstName", subscriber.getFirstName());
//			model.addAttribute("lastName", subscriber.getLastName());
//			model.addAttribute("email", subscriber.getEmail());
//			//return "form_test";
//			return "index";
			
			@PostMapping (value = "/")
			public String addNewSubscriber(Subscriber subscriber, Model model) throws ScriptException, NoSuchMethodException {
				//try {
					subscriberRepository.save(new Subscriber(subscriber.getEmail(), subscriber.getSignedUp()));
					model.addAttribute("email", subscriber.getEmail());
					//return "form_test";
					return "index";
		//}
//		catch (Exception e){
//			ScriptEngineManager manager = new ScriptEngineManager();
//		    ScriptEngine engine = manager.getEngineByName("JavaScript");
//		    
//		    String script = (String)"function duplicate() {print('You have already subscribed!')}";
//		    
//		    engine.eval(script);
//		    
//		    Invocable inv = (Invocable) engine;
//		    
//		    inv.invokeFunction("duplicate", "Scripting");
//		    
//		    
//		    
//		}
		//return "form_test";
	}
	
//	private static final String PATH = "/error";
//	
//	@RequestMapping(value = PATH)
//	public String error() {
//		return "Error handling";
//	}
//
//	@Override
//	public String getErrorPath() {
//		// TODO Auto-generated method stub
//		return PATH;
//	}


}
