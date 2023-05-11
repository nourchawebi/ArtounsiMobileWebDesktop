/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import models.Video;
import interfaces.VideoInterface;
import interfaces.ViewInterface;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import models.Logged;
import models.Tutoriel;
import service.VideoService;
import service.ViewService;

/**
 * FXML Controller class
 *
 * @author achref
 */
public class VideoItemController implements Initializable {
    VideoInterface vi = new VideoService();
    ViewInterface vvi = new ViewService();

    @FXML
    private ImageView video_image;
    @FXML
    private Label video_date;
    @FXML
    private Label video_title;
    @FXML
    private Label video_desc;
    
    private Video video;
    @FXML
    private ImageView modifyVideo;
    @FXML
    private HBox vbox;
    @FXML
    private ImageView deletevideo;
    @FXML
    private Label video_date1;
    @FXML
    private Label numViews;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    void setData(Video video,Tutoriel tutoriel) throws ParseException {
        if(Logged.get_instance().getUser()==null){
            vbox.getChildren().remove(modifyVideo);
            vbox.getChildren().remove(deletevideo);
        }
        
        if(Logged.get_instance().getUser()!=null)
            if(!(Logged.get_instance().getUser().getType().equals("Admin") || Logged.get_instance().getUser().getID_User()==tutoriel.getCreator().getID_User())){
                vbox.getChildren().remove(modifyVideo);
                vbox.getChildren().remove(deletevideo);
            }
        
        File file = new File("C:\\xampp\\htdocs\\img\\"+video.getPathImage());
        Image img = new Image(file.toURI().toString());
        
        video_image.setImage(img);
        video_title.setText(video.getTitle());
        video_desc.setText(video.getDescrption());
        Date date = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss.S").parse(video.getDate_p());
        String newstring = new SimpleDateFormat("yyyy-MM-dd").format(date);

        video_date.setText(newstring); 
        
        this.video = video;
        numViews.setText(String.valueOf(vvi.fetchNumViewsByVideo(video)));
        /*if(!(Logged.get_instance().getUser().getType().equals("Admin") || Logged.get_instance().getUser().getID_User()==video.getTutoriel().getCreator().getID_User())){
            vbox.getChildren().remove(modifyVideo);
            vbox.getChildren().remove(deletevideo);
        }*/
    }

    @FXML
    private void showVideo(MouseEvent event) {
        try {
        if(Logged.get_instance().getUser()!=null){
            vvi.addVue(video);
        }
        
        FXMLLoader loader= new FXMLLoader(getClass().getResource("./VideoView.fxml"));
        Parent view_2=loader.load();
        VideoViewController video_ViewController=loader.getController();
        video_ViewController.setVideo(video.getPathVideo());
        Stage stage=(Stage)((Node)event.getSource()).getScene().getWindow();
        Scene scene = new Scene(view_2);
        stage.setScene(scene);
        stage.show();
    } catch (IOException ex) {
        ex.printStackTrace();
        //Logger.getLogger(FXMLafficherController.class.getName()).log(Level.SEVERE, null, ex);
    }
    }

    @FXML
    private void modifyVideo(MouseEvent event) {
                try {
        FXMLLoader loader= new FXMLLoader(getClass().getResource("./FXML_Modify_Video.fxml"));
        Parent view_2=loader.load();
        FXML_Modify_VideoController modify_VideoController=loader.getController();
        modify_VideoController.setVideo(video);
        Stage stage=(Stage)((Node)event.getSource()).getScene().getWindow();
        Scene scene = new Scene(view_2);
        stage.setScene(scene);
        stage.show();
    } catch (IOException ex) {
        ex.printStackTrace();
        //Logger.getLogger(FXMLafficherController.class.getName()).log(Level.SEVERE, null, ex);
    }
    }

    @FXML
    private void deleteVideo(MouseEvent event) throws IOException {
        vi.deleteVideo(video.getID_Video());
        FXMLLoader loader= new FXMLLoader(getClass().getResource("./FXML_Fetch_Tutoriels.fxml"));
        Parent view_2=loader.load();
        Scene scene = new Scene(view_2);
        Stage stage=(Stage)((Node)event.getSource()).getScene().getWindow();
        stage.setScene(scene);
        stage.show();
    }
    
} 
