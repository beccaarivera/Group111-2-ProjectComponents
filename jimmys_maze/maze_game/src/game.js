
const config = {
  type: Phaser.AUTO,
  parent: 'game',
  scale: {
    mode: Phaser.Scale.FIT,
    autoCenter: Phaser.Scale.CENTER_BOTH
  },
  scene: {
    preload,
    create,
    update,
  },
  physics: {
    default: 'arcade',
    arcade: {
      gravity: { n: 500 },
      debug: true,
    },
  }
};

const game = new Phaser.Game(config);

function preload() {
  this.load.image('background', '../../../maze_game/src/assets/images/background.png');
  this.load.image('spike', '../../../maze_game/src/assets/images/spike.png');
  this.load.atlas('player', '../../../maze_game/src/assets/images/kenney_player.png','../../../maze_game/src/assets/images/kenney_player_atlas.json');
  this.load.image('tiles', '../../../maze_game/src/assets/tilesets/platformPack_tilesheet.png');
  this.load.tilemapTiledJSON('map', '../../../maze_game/src/assets/tilemaps/mazelevel1.json');

}

function create()
{

const map = this.make.tilemap({ key: 'map' });
const tileset = map.addTilesetImage('kenney_simple_platformer', 'tiles');
const platforms = map.createStaticLayer('Platforms', tileset, 0, 0);
platforms.setCollisionByExclusion(-1, true);
this.player = this.physics.add.sprite(110, 145, 'player');//this says where he will be placed
this.player.setBounce(0.1);
this.player.setCollideWorldBounds(true);
this.physics.add.collider(this.player, platforms);
this.anims.create({
  key: 'walk',
  frames: this.anims.generateFrameNames('player', {
    prefix: 'robo_player_',
    start: 2,
    end: 3,
  }),
  frameRate: 10,
  repeat: -1
});
this.anims.create({
  key: 'idle',
  frames: [{ key: 'player', frame: 'robo_player_0' }],
  frameRate: 10,
});
this.anims.create({
  key: 'jump',
  frames: [{ key: 'player', frame: 'robo_player_1' }],
  frameRate: 10,
});
this.cursors = this.input.keyboard.createCursorKeys();
this.spikes = this.physics.add.group({
  allowGravity: false,
  immovable: true
});

// Let's get the spike objects, these are NOT sprites
const spikeObjects = map.getObjectLayer('Spikes')['objects'];

// Now we create spikes in our sprite group for each object in our map
spikeObjects.forEach(spikeObject => {
  // Add new spikes to our sprite group, change the start y position to meet the platform
  const spike = this.spikes.create(spikeObject.x, spikeObject.y + 200 - spikeObject.height, 'spike').setOrigin(0, 0);
});
this.spikes = this.physics.add.group({
  allowGravity: false,
  immovable: true
});

// Let's get the spike objects, these are NOT sprites
spikeObjects.forEach(spikeObject => {
  const spike = this.spikes.create(spikeObject.x, spikeObject.y + 200 - spikeObject.height, 'spike').setOrigin(0, 0);
  spike.body.setSize(spike.width, spike.height - 20).setOffset(0, 20);
});
this.physics.add.collider(this.player, this.spikes, playerHit, null, this);
}


// Player can jump while walking any direction by pressing the space bar
// or the 'UP' arrow

function playerHit(player, spike) {
  player.setVelocity(0, 0);
  player.setX(110);
  player.setY(145);
  player.play('idle', true);
  player.setAlpha(0);
  let tw = this.tweens.add({
    targets: player,
    alpha: 1,
    duration: 100,
    ease: 'Linear',
    repeat: 5,
  });
}
function update() {
  if (this.cursors.left.isDown) {
    this.player.setVelocityX(-200);
    this.player.play('walk', true);
  }
  else if (this.cursors.right.isDown) {
    this.player.setVelocityX(200);
    this.player.play('walk', true);
  }
  else if (this.cursors.down.isDown) {
    this.player.setVelocityY(200);
    this.player.play('walk', true);
  }
  else if (this.cursors.up.isDown){
    this.player.setVelocityY(-200);
    this.player.play('walk', true);
  }
  else{
    this.player.setVelocity(0);
    this.player.play('walk', false);
    this.player.play('idle', true);
  }


  // Player can jump while walking any direction by pressing the space bar
  // or the 'UP' arrow
/*  if ((this.cursors.space.isDown || this.cursors.up.isDown) && this.player.body.onFloor()) {
    this.player.setVelocityY(-350);
    this.player.play('jump', true);
  }*/
}
