const Ziggy = {"url":"http:\/\/127.0.0.1:8000","port":8000,"defaults":{},"routes":{"login":{"uri":"login","methods":["GET","HEAD"]},"logout":{"uri":"logout","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"]},"password.email":{"uri":"password\/email","methods":["POST"]},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"]},"password.update":{"uri":"password\/reset","methods":["POST"]},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"]},"home":{"uri":"home","methods":["GET","HEAD"]},"dashboard.company":{"uri":"empresa\/dashboard","methods":["GET","HEAD"]},"register-company":{"uri":"empresa\/register-company","methods":["POST"]},"candidatedash":{"uri":"candidato\/dashboard","methods":["GET","HEAD"]},"register-candidate":{"uri":"candidato\/register-candidate","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
