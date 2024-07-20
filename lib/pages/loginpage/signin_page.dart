import 'package:avalon/theme/colors.dart';
import 'package:flutter/material.dart';

class SignInPage extends StatelessWidget {
  const SignInPage({super.key});

  @override
  Widget build(BuildContext context) {
      Size size = MediaQuery.of(context).size;
    return Scaffold(
       body:Container(
        decoration: BoxDecoration(
          gradient: LinearGradient(
            begin: Alignment.topCenter,
            colors: [
              backgroundColor2,
              backgroundColor2,
              backgroundColor4,
            ]
          )
          ),
          child: ListView(
            children:[
              SizedBox(height: size.height * 0.1,),
              Container(
                child: Column(
                  children: [
                    Text('Welocme Back!',
                    style: TextStyle(
                        fontWeight: FontWeight.w700,
                        fontSize: 39,
                        color: textColor1,
                    ),
                    ),
                    Text('Continue your journey towards a\n sustainable future',
                    textAlign: TextAlign.center,
                    style: TextStyle(
                      fontSize: 20,
                      color: textColor2,
                    ),
                    ),
                    SizedBox(height: size.height * 0.1,),
                    Container(
                      width: size.width * 0.8,
                      child:  Column(
                        children: [
                          TextField(
                            decoration: InputDecoration(
                              contentPadding: const EdgeInsets.symmetric(
                                vertical: 15, 
                                horizontal: 22),
                              hintText: "Enter Email",
                              fillColor: Colors.white,
                              filled: true,
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide:BorderSide.none,
                              )
                            ),
                          ),
                          SizedBox(height: size.height * 0.03 ,),
                          //Password Input Text field 
                          TextField(
                            decoration: InputDecoration(
                              contentPadding: const EdgeInsets.symmetric(
                                vertical: 18, 
                                horizontal: 22),
                              hintText: "Enter Password",
                              suffixIcon: const Icon(Icons.visibility_off),
                              suffixIconColor: Colors.black26,
                              fillColor: Colors.white,
                              filled: true,
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide:BorderSide.none,
                              )
                            ),
                          ),
                        ],
                      ),
                    )
                  ] 
                ),
              )
             ] 

          )
        )
    );
  }
}
