package com.tts.PaintCompany.Subscribe;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;


@Controller
public class SubscriberController { 
	
	@Autowired
	private SubscriberRepository subscriberRepository;
	
	@GetMapping (value= "/")
	public String index(Subscriber subscriber) {
		return "index";
	}
			
			@PostMapping (value = "/")
			public String addNewSubscriber(Subscriber subscriber, Model model) {
				
					subscriberRepository.save(new Subscriber(subscriber.getEmail(), subscriber.getSignedUp()));
					model.addAttribute("email", subscriber.getEmail());			
					return "index";

}
			
}
