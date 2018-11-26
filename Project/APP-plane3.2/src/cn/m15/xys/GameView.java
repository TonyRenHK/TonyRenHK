package cn.m15.xys;

import java.util.ArrayList;
import java.util.List;

import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.graphics.Point;
import android.util.AttributeSet;
import android.util.Log;
import android.view.MotionEvent;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationSet;
import android.view.animation.AnimationUtils;
import android.widget.GridLayout;

public class GameView extends GridLayout {

	private Card[][] cardsMap = new Card[4][4];
	private List<Point> emptyPoints = new ArrayList<Point>();
	
	public GameView(Context context, AttributeSet attrs, int defStyle) {
		super(context, attrs, defStyle);
		// TODO Auto-generated constructor stub¡¢
		initGameView();
	}

	public GameView(Context context) {
		super(context);
		// TODO Auto-generated constructor stub
		initGameView();
	}

	public GameView(Context context, AttributeSet attrs) {
		super(context, attrs);
		// TODO Auto-generated constructor stub
		initGameView();
	}

	private void initGameView(){
		setBackgroundColor(0xff000000);
		setOnTouchListener(new View.OnTouchListener() {
			private float startX, startY, offsetX, offsetY;
			@Override
			public boolean onTouch(View v, MotionEvent event) {
				// TODO Auto-generated method stub
				switch (event.getAction()) {
				case MotionEvent.ACTION_DOWN:
					startX = event.getX();
					startY = event.getY();
					break;
				
				case MotionEvent.ACTION_UP:
					offsetX = event.getX() - startX;
					offsetY = event.getY() - startY;
					if(Math.abs(offsetX) > Math.abs(offsetY)){
						if(offsetX < -5){
							Log.d("winson", "Left");
							toLeft();
						}
						else if(offsetX > 5){
							Log.d("winson", "Right");
							toRight();
						}
					}
					else {
						if(offsetY < -5){
							Log.d("winson", "Up");
							toUp();
						}
						else if(offsetY > 5){
							Log.d("winson", "Down");
							toDown();
						}
					}
					break;

				default:
					break;
				}
				return true;
			}
		});
	}
	
	@Override
	protected void onSizeChanged(int w, int h, int oldw, int oldh) {
		// TODO Auto-generated method stub
		super.onSizeChanged(w, h, oldw, oldh);
		int cardWidth = (Math.min(w, h) - 10)/4;
		addCard(cardWidth, cardWidth);
		Log.d("winson", "Start");
		loadMap();
		MainActivity.getMainActivity().showScore(DataUtil.loadNowScore(getContext()));
		boolean firstFlag = true;
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				if(cardsMap[x][y].getNum() != 0){
					firstFlag = false;
					break;
				}
			}
		}
		if(firstFlag == true){
			Log.d("winson", "New Game");
			startGame();
		}
		
	}
	
	private void addCard(int cardWidth, int cardHeight) {
		// TODO Auto-generated method stub
		Card card;
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				card = new Card(getContext());
				card.setNum(0);
				addView(card, cardWidth, cardHeight);
				cardsMap[j][i] = card;
			}
		}
	}
	
	private void addRandomNum(){
		emptyPoints.clear();
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				if (cardsMap[j][i].getNum() <= 0){
					emptyPoints.add(new Point(j, i));
				}
			}
		}
		Point p = emptyPoints.remove((int)(Math.random() * emptyPoints.size()));
		cardsMap[p.x][p.y].setNum(Math.random()> 0.3 ? 2 : 4);
	}
	
	public void startGame(){
		MainActivity.getMainActivity().clearScore();
		MainActivity.getMainActivity().showScore();
		for (int i = 0; i < 4; i++) {
			for (int j = 0; j < 4; j++) {
				cardsMap[j][i].setNum(0);
			}
		}
		addRandomNum();
		addRandomNum();
		
	}

	private void toLeft(){
		boolean addFlag = false;
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				for (int x1 = x + 1; x1 < 4; x1++){
					if (cardsMap[x1][y].getNum() > 0){
						if(cardsMap[x][y].getNum() <= 0){
							cardsMap[x][y].setNum(cardsMap[x1][y].getNum());
							cardsMap[x1][y].setNum(0);
							x--;
							addFlag = true;
						}
						else if (cardsMap[x][y].getNum() == cardsMap[x1][y].getNum()){
							cardsMap[x][y].setNum(cardsMap[x][y].getNum()*2);
							cardsMap[x1][y].setNum(0);
							
							MainActivity.getMainActivity().addScore(cardsMap[x][y].getNum());
							addFlag = true;
						}
						break;
					}
				}
			}
		}
		if(addFlag == true){
			addRandomNum();
			checkComplete();
		}
	}
	private void toRight(){
		boolean addFlag = false;
		for (int y = 0; y < 4; y++) {
			for (int x = 3; x >= 0; x--) {
				for (int x1 = x - 1; x1 >= 0; x1--){
					if (cardsMap[x1][y].getNum() > 0){
						if(cardsMap[x][y].getNum() <= 0){
							cardsMap[x][y].setNum(cardsMap[x1][y].getNum());
							cardsMap[x1][y].setNum(0);
							x++;
							addFlag = true;
						}
						else if (cardsMap[x][y].getNum() == cardsMap[x1][y].getNum()){
							cardsMap[x][y].setNum(cardsMap[x][y].getNum()*2);
							cardsMap[x1][y].setNum(0);
							MainActivity.getMainActivity().addScore(cardsMap[x][y].getNum());
							addFlag = true;
						}
						break;
					}
				}
			}
		}
		if(addFlag == true){
			addRandomNum();
			checkComplete();
		}
	}
	private void toUp(){
		boolean addFlag = false;
		for (int x = 0; x < 4; x++) {
			for (int y = 0; y < 4; y++) {
				for (int y1 = y + 1; y1 < 4; y1++){
					if (cardsMap[x][y1].getNum() > 0){
						if(cardsMap[x][y].getNum() <= 0){
							cardsMap[x][y].setNum(cardsMap[x][y1].getNum());
							cardsMap[x][y1].setNum(0);
							y--;
							addFlag = true;
						}
						else if (cardsMap[x][y].getNum() == cardsMap[x][y1].getNum()){
							cardsMap[x][y].setNum(cardsMap[x][y].getNum()*2);
							cardsMap[x][y1].setNum(0);
							MainActivity.getMainActivity().addScore(cardsMap[x][y].getNum());
							addFlag = true;
						}
						break;
					}
				}
			}
		}
		if(addFlag == true){
			addRandomNum();
			checkComplete();
		}
	}
	private void toDown(){
		boolean addFlag = false;
		for (int x = 0; x < 4; x++) {
			for (int y = 3; y >= 0; y--) {
				for (int y1 = y - 1; y1 >= 0; y1--){
					if (cardsMap[x][y1].getNum() > 0){
						if(cardsMap[x][y].getNum() <= 0){
							cardsMap[x][y].setNum(cardsMap[x][y1].getNum());
							cardsMap[x][y1].setNum(0);
							y++;
							addFlag = true;
						}
						else if (cardsMap[x][y].getNum() == cardsMap[x][y1].getNum()){
							cardsMap[x][y].setNum(cardsMap[x][y].getNum()*2);
							cardsMap[x][y1].setNum(0);
							MainActivity.getMainActivity().addScore(cardsMap[x][y].getNum());
							addFlag = true;
						}
						break;
					}
				}
			}
		}
		if(addFlag == true){
			addRandomNum();
			checkComplete();
		}
	}
	
	private void checkComplete(){
		boolean completeFlag = true;
		ALL:
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				if(cardsMap[x][y].getNum() == 0 ||
						( x > 0 && cardsMap[x][y].getNum() == cardsMap[x-1][y].getNum())||
						( x < 3 && cardsMap[x][y].getNum() == cardsMap[x+1][y].getNum()) ||
						( y > 0 && cardsMap[x][y].getNum() == cardsMap[x][y-1].getNum()) ||
						( y < 3 && cardsMap[x][y].getNum() == cardsMap[x][y+1].getNum()) 
						){
					completeFlag = false;
					break ALL;
				}
			}
		}
		if(completeFlag == true){
			new AlertDialog.Builder(getContext())
			.setTitle("You fail-_- £¡")
			.setMessage("You Have got " 
			+ MainActivity.getMainActivity().getScore() + " marks!!")
			.setNegativeButton("Quit", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					clearData();
					System.exit(0);
				}

				
			})
			.setPositiveButton("Again!", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					clearData();
					startGame();
				}
			})
			.setCancelable(false).show();
		}
	}

	public void saveMap() {
		// TODO Auto-generated method stub
		Log.d("winson", "Save");
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				DataUtil.saveMap(getContext(), x, y, cardsMap[x][y].getNum());
			}
		}
		DataUtil.saveNowScore(getContext(), MainActivity.getMainActivity().getScore());
	}
	
	public void loadMap(){
		Log.d("winson", "Read");
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				cardsMap[x][y].setNum(DataUtil.loadMap(getContext(), x, y));
			}
		}
	}
	public void clearData() {
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				DataUtil.saveMap(getContext(), x, y, 0);
			}
		}
		DataUtil.saveNowScore(getContext(), MainActivity.getMainActivity().getScore());
	}
	
	public void reName() {
		for (int y = 0; y < 4; y++) {
			for (int x = 0; x < 4; x++) {
				cardsMap[x][y].setNum(cardsMap[x][y].getNum());
			}
		}
	}
	
}
